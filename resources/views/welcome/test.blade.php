<!------
    <html>
  <head>
    <script src="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.js"></script>
    <link type="text/css" rel="stylesheet" href="https://api.mqcdn.com/sdk/mapquest-js/v1.3.2/mapquest.css"/>

    <script type="text/javascript">
      window.onload = function() {
        L.mapquest.key = 'lYrP4vF3Uk5zgTiGGuEzQGwGIVDGuy24';

        let lng = Number("{{-- $map->origin->latLng->lng --}}");
        let lat = Number("{{-- $map->origin->latLng->lat --}}");
        let comas = ", ";
        let address = "{{-- $map->origin->adminArea1 --}}" + comas + "{{-- $map->origin->adminArea3 --}}" + comas
        + "{{-- $map->origin->adminArea5 --}}" + comas + "{{-- $map->origin->street --}}";

        console.log(lng, lat, address);

        var map = L.mapquest.map('map', {
          center: [0, 0],
          layers: L.mapquest.tileLayer('map'),
          zoom: 12
        });

        map.addControl(L.mapquest.control());

        L.mapquest.geocoding().geocode(address);

      }
    </script>
  </head>

  <body style="border: 0; margin: 0;">
    <div id="map" style="width: 100%; height: 530px;"></div>

  </body>
</html>

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World!</h1>
</body>
</html>
