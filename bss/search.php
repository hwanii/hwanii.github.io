<html>
    <head>
        <title>Place Autocomplete element</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <link rel="stylesheet" type="text/css" href="./style.css" />
    </head>
    <body>
        <input class="autocomplete" id="ac1" placeholder="Enter your address" type="text">
        <br />
        <br />
        <input class="autocomplete" id="ac2" placeholder="Enter your address" type="text">
    </body>
    <script defer src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAIzCE5WF93dXaYi3jOgE-cw-LaWcmFBuo&libraries=places&callback=initMap"></script>
    <script defer type="module" src="./index.js"></script>
</html>