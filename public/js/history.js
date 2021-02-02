
function loadHistory() {
    fetch('http://localhost:8000/api/history', {
    headers: {
        contentType: 'application/json'
    }
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        data.forEach(function (history) {
            document.getElementById('history-table').innerHTML += `
            <tr>
                <td>${history.city}</td>
                <td>${history.humedity} %</td>
                <td>${history.visivility} %</td>
                <td>${history.pressure} %</td>
                <td>${history.chill} C</td>
                <td>${history.pressure} %</td>
                <td>${history.chill} C</td>
                <td>${history.created_at} C</td>
            </tr>`;
        })
    });
}

loadHistory();
