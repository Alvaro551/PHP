<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ::after #map {
            height: 100%;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;

        }
    </style>
</head>

<body>
    <div id="map">
        <script>
            function intMap() {
                var map;
                var results;
                map = new google.maps.Map(document.getElementById('map')),{zoom: 5.5, center: new google.maps.LatLng(40,-4)}
                mapTypeId: 'terrain'
            
            });
        </script>
    </div>

</body>

</html>