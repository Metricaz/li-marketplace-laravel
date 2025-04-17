import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener('DOMContentLoaded', (event) => {
    const checkbox = document.getElementById('myCheckbox');
    checkbox.addEventListener('change', () => {
        const isChecked = checkbox.checked;

        // Data to send to the controller
        const data = { checked: isChecked };

        // Create an XMLHttpRequest object
        const xhr = new XMLHttpRequest();

        // Define what happens on successful data submission
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                console.log('Success:', xhr.responseText);
            } else {
                console.log('The request failed!');
            }
        };

        // Define what happens in case of error
        xhr.onerror = function () {
            console.log('There was an error!');
        };

        // Set up the request with the HTTP method and the URL to send the data to
        xhr.open('POST', '/controller-endpoint');

        // Set the request header to let the server know the type of content being sent
        xhr.setRequestHeader('Content-Type', 'application/json;charset=UTF-8');

        // Send the request with the data as a JSON string
        xhr.send(JSON.stringify(data));
    });
});