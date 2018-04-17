<!-- https://developers.google.com/maps/documentation/javascript/adding-a-google-map -->

<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="doko_sumika.css">
    <style>
    #map {
    width: 100%;
    height: 400px;
    background-color: grey;
    }
    </style>
  </head>
  <body>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: 35.686697, lng: 139.788729};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 11
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
        var maker = new google.maps.Marker({
          map: map,
          position:{lat:10.328556,lng: 123.903079},
          // ピンのテキストの変更、マーカーは変更できるのでおそらく消せる
          label:{
            text:"ここの焼肉美味しかった！！",
            // 文字の色を変える
            color:"green",
            fontSize: '10px',
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position:{lat:35.686697,lng:139.788729},
          label:{
            text:"1",
            color:"green",
            fontSize: '10px',
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position:{lat:(35.686697+35.686697)/2,lng:(139.788729+139.84236)/2},
          label:{
            text:"1,2",
            color:"green",
            fontSize: '10px',
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position:{lat:35.686697,lng:139.84236},
          label:{
            text:"2",
            color:"green",
            fontSize: '10px',
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position:{lat:(35.686697+35.686697+35.743565+35.743565)/4,lng:(139.788729+139.84236+139.842361+139.788729)/4},
          label:{
            text:"center",
            color:"green",
            fontSize: '10px',
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position:{lat:35.743565,lng:139.842361},
          label:{
            text:"3",
            color:"green",
            fontSize: '10px',
          }
        });

        var marker = new google.maps.Marker({
          map: map,
          position:{lat:(35.743565+35.743565)/2,lng:(139.842361+139.788729)/2},
          label:{
            text:"3,4",
            color:"green",
            fontSize: '10px',
          }
        });


        var marker = new google.maps.Marker({
          map: map,
          position:{lat:35.743565,lng:139.788729},
          label:{
            text:"4",
            color:"green",
            fontSize: '10px',
          }
        });



      }

    </script>


    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxNXrYg4kLhq6v3iGy2PBewPSU1EJejys&callback=initMap">
    </script>
  </body>
</html>