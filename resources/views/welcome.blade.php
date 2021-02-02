<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">
    <!-- Styles -->
    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }

    </style>

    <style>

    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 mb-3">
                <h1 style="font-weight: 700;" class="text-center">Prueba Desarollador Viajemos.com</h1>
                <h6 class="text-center">Pablo Andres Diaz Mora</h6>
            </div>
        </div>
    </div>

    <div class="container my-3">
        <div class="row text-center">
            <div class="col-3">
                <div class="card" id="miami-button">
                    <div class="card-body">
                        <h4>Miami</h4>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" id="orlando-button">
                    <div class="card-body">
                        <h4>Orlando</h4>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" id="newyork-button">
                    <div class="card-body">
                        <h4>New York</h4>

                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card" id="historial-button">
                    <div class="card-body">
                        <h4>Historial</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <h1 style="font-weight: 700;" id="city-name">Miami</h1>
            </div>
            <div class="col-4 text-center my-5 fader">

                <h2>Viento</h2>
                <h5>Viento: <span><b id="wind-chill">13</b><span></h5>
                <h5>Direccion: <span><b id="wind-direction">13</b><span></h5>
                <h5>Velocidad: <span><b id="wind-speed">13</b><span></h5>
            </div>
            <div class="col-4 text-center my-5">

                <h2>Atmosfera</h2>
                <h5>humedad: <span><b id="atmosphere-humidity">13</b><span></h5>
                <h5>visibilidad: <span><b id="atmosphere-visibility">13</b><span></h5>
                <h5>presión: <span><b id="atmosphere-pressure">13</b><span></h5>
            </div>
            <div class="col-4 text-center my-5">

                <h2>Condición</h2>
                <h5>Temperatura: <span><b id="condition-chill">13</b><span></h5>
                <h5>Amanecer: <span><b id="astronomy-sunrise">13</b><span></h5>
                <h5>Puesta de sol: <span><b id="astronomy-sunset">13</b><span></h5>
            </div>
            <div class="col-12 text-center">
                <canvas id="chartJSContainer" class="ml-4 mt-2" width="600" height="100"></canvas>
            </div>
        </div>
    </div>
    </div>

    <div class="fuild-container mt-5">
        <div id="map" class="" style="width: 100%; height: 350px; border-radius: 10px"></div>
    </div>

</body>
<script>
    var map = L.map('map').setView([51.505, -0.09], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

</script>

<script>
    getWheaterData('Miami')
    // Miami Button
    document.getElementById('miami-button').addEventListener('click', function () {
        getWheaterData('Miami')
    });

    // Orlando Button
    document.getElementById('orlando-button').addEventListener('click', function () {
        getWheaterData('Orlando')

    });

    // New York Button
    document.getElementById('newyork-button').addEventListener('click', function () {
        getWheaterData('New york')

    });

    // History
    document.getElementById('historial-button').addEventListener('click', function () {
        window.location = 'history'
    });

    // get Wheater
    function getWheaterData(city) {
        return fetch('http://localhost:8000/api/wheater', {
                headers: {
                    contentType: 'application/json'
                },
                body: JSON.stringify({
                    city
                }),
                method: 'POST'
            })
            .then(response => response.json())
            .then(data => {

                // Chart
                createChart(data.forecasts);

                // Map marker
                setMapMark(data.location.lat, data.location.long);

                // city Name
                setInnerHtml('city-name', city);

                // wind 
                setInnerHtml('wind-chill', data.current_observation.wind.chill);
                setInnerHtml('wind-direction', data.current_observation.wind.direction);
                setInnerHtml('wind-speed', data.current_observation.wind.speed);

                //  atmosphere
                setInnerHtml('atmosphere-humidity', data.current_observation.atmosphere.humidity);
                setInnerHtml('atmosphere-visibility', data.current_observation.atmosphere.visibility);
                setInnerHtml('atmosphere-pressure', data.current_observation.atmosphere.pressure);

                // wind 
                setInnerHtml('condition-chill', data.current_observation.condition.temperature);
                setInnerHtml('astronomy-sunrise', data.current_observation.astronomy.sunrise);
                setInnerHtml('astronomy-sunset', data.current_observation.astronomy.sunset);

                $("html, body").animate({
                    scrollTop: $(document).height()
                }, 700);

            });

    }


    function setMapMark(lat, long) {
        L.marker([lat, long]).addTo(map)
        map.setView(new L.LatLng(lat, long), 11);
    }

    function createChart(data) {
        console.log(data);
        let labels_array = [];
        let dataset_high = [];
        let dataset_low = [];

        data.forEach(element => {
            labels_array.push(converDateFormat(new Date(element.date * 1000)));
            dataset_high.push(element.high);
            dataset_low.push(element.low);
        });
        console.log(labels_array);
        // data
        // labels 
        var options = {
            type: 'line',
            data: {
                labels: labels_array,
                datasets: [{
                        label: 'Max',
                        data: dataset_high,
                        borderWidth: 2,
                        fill: false,
                        backgroundColor: '#f06969',
                        borderColor: "#f06969",

                    },
                    {
                        label: 'Min',
                        data: dataset_low,
                        borderWidth: 2,
                        backgroundColor: '#95d8f5',
                        borderColor: "#95d8f5",

                        fill: false,
                    }
                ]
            }
        }

        var ctx = document.getElementById('chartJSContainer').getContext('2d');
        new Chart(ctx, options);
    }

    function setInnerHtml(selector_id, value) {
        document.getElementById(selector_id).innerHTML = value;
    }

    function scrollToBottom() {
        $("body").animate({
            scrollTop: '1000'
        }, 500, function () {

        });
    }

    function converDateFormat(date) {
        const mo = new Intl.DateTimeFormat('en', {
            month: 'short'
        }).format(date);
        const da = new Intl.DateTimeFormat('en', {
            day: '2-digit'
        }).format(date);

        return `${da}-${mo}`;
    }

</script>


</html>
