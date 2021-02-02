<?php

namespace App\Http\Controllers;

use App\Models\WhaterInfo;
use Illuminate\Http\Request;
use WheaterInfo;

class WheaterController extends Controller
{
    function buildBaseString($baseURI, $method, $params) {
        $r = array();
        ksort($params);
        foreach($params as $key => $value) {
            $r[] = "$key=" . rawurlencode($value);
        }
        return $method . "&" . rawurlencode($baseURI) . '&' . rawurlencode(implode('&', $r));
    }
    
    function buildAuthorizationHeader($oauth) {
        $r = 'Authorization: OAuth ';
        $values = array();
        foreach($oauth as $key=>$value) {
            $values[] = "$key=\"" . rawurlencode($value) . "\"";
        }
        $r .= implode(', ', $values);
        return $r;
    }
    
    function getData(Request $request) {

        $location = json_decode($request->getContent());

        $url = 'https://weather-ydn-yql.media.yahoo.com/forecastrss';
        $app_id = env('YAHOO_APP_ID');
        $consumer_key = env('YAHOO_CONSUMER_KEY');
        $consumer_secret = env('YAHOO_SECRET_KEY');
        
        $query = array(
            'location' => $location->city,
            'format' => 'json',
        );
        
        $oauth = array(
            'oauth_consumer_key' => $consumer_key,
            'oauth_nonce' => uniqid(mt_rand(1, 1000)),
            'oauth_signature_method' => 'HMAC-SHA1',
            'oauth_timestamp' => time(),
            'oauth_version' => '1.0'
        );
        
        $base_info = $this->buildBaseString($url, 'GET', array_merge($query, $oauth));
        $composite_key = rawurlencode($consumer_secret) . '&';
        $oauth_signature = base64_encode(hash_hmac('sha1', $base_info, $composite_key, true));
        $oauth['oauth_signature'] = $oauth_signature;
        
        $header = array(
            $this->buildAuthorizationHeader($oauth),
            'X-Yahoo-App-Id: ' . $app_id
        );
        $options = array(
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_HEADER => false,
            CURLOPT_URL => $url . '?' . http_build_query($query),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false
        );
        
        $ch = curl_init();
        curl_setopt_array($ch, $options);
        $response = curl_exec($ch);
        curl_close($ch);
        
    
        $return_data = json_decode($response);
        
        $this->saveHistory($return_data, $location->city);

        return response()
            ->json($return_data)
            ->setStatusCode(200);
    }

    public function getHistory() {
        return response()
            ->json(WhaterInfo::all())
            ->setStatusCode(200);
    }
    
    private function saveHistory($wheater_data, $city) {
        
        $current_data = new WhaterInfo([
            'city' => $city,
            'humedity' => $wheater_data->current_observation->atmosphere->humidity,
            'visivility' => $wheater_data->current_observation->atmosphere->visibility,
            'pressure' => $wheater_data->current_observation->atmosphere->pressure,
            'chill' => $wheater_data->current_observation->condition->temperature,
            'wind_direction' => $wheater_data->current_observation->wind->direction,
            'wind-speed' => $wheater_data->current_observation->wind->speed
        ]);

        $current_data->save();
    }
}
