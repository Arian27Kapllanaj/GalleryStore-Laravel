<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKt6Ikgg3SkflVMQqu_-QG-IRLia_deh4&callback=initMap&libraries=&v=weekly"
      defer
    ></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        position: static;
        height: 75%;
        width: 85.7%; 
      }
      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
        .sidebar-container {
        position: fixed;
        width: 220px;
        height: 100%;
        left: 0;
        overflow-x: hidden;
        overflow-y: auto;
        background: #1a1a1a;
        color: #fff;
        z-index: 1001;
        }
        .content-container {
        padding-top: 20px;
        }
        .sidebar-logo {
        padding: 10px 15px 10px 30px;
        font-size: 20px;
        background-color: #2574A9;
        }
        .sidebar-navigation {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: relative;
        }
        .sidebar-navigation li {
        background-color: transparent;
        position: relative;
        display: inline-block;
        width: 100%;
        line-height: 20px;
        }
        .sidebar-navigation li a {
        padding: 10px 15px 10px 30px;
        display: block;
        color: #fff;
        }
        .sidebar-navigation li .fa {
        margin-right: 10px;
        }
        .sidebar-navigation li a:active,
        .sidebar-navigation li a:hover,
        .sidebar-navigation li a:focus {
        text-decoration: none;
        outline: none;
        }
        .sidebar-navigation li::before {
        background-color: #2574A9;
        position: absolute;
        content: '';
        height: 100%;
        left: 0;
        top: 0;
        -webkit-transition: width 0.2s ease-in;
        transition: width 0.2s ease-in;
        width: 3px;
        z-index: -1;
        }
        .sidebar-navigation li:hover::before {
        width: 100%;
        }
        .sidebar-navigation .header {
        font-size: 12px;
        text-transform: uppercase;
        background-color: #151515;
        padding: 10px 15px 10px 30px;
        }
        .sidebar-navigation .header::before {
        background-color: transparent;
        }
        .content-container {
        padding-left: 220px;
        }
    </style>
    <script>
      let map;
      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: 29.9755357, lng: 31.1289212 },
          zoom: 2.2,
        });
      infoWindow = new google.maps.InfoWindow();
      const locationButton = document.createElement("button");
      locationButton.textContent = "Pan to Current Location";
      locationButton.classList.add("custom-map-control-button");
      map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
      locationButton.addEventListener("click", () => {
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            (position) => {
              const pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude,
              };
              infoWindow.setPosition(pos);
              infoWindow.setContent("Location found.");
              infoWindow.open(map);
              map.setCenter(pos);
              loadMarkers();
            },
            () => {
              handleLocationError(true, infoWindow, map.getCenter());
            }
          );
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      });
    function handleLocationError(browserHasGeolocation, infoWindow, pos) {
      infoWindow.setPosition(pos);
      infoWindow.setContent(
        browserHasGeolocation
          ? "Error: The Geolocation service failed."
          : "Error: Your browser doesn't support geolocation."
      );
      infoWindow.open(map);
    }
    //Google Map
    function loadMarkers() {
        var url = "http://127.0.0.2/GalleryStore-Laravel/public/all"; 
           
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var json = JSON.parse(this.responseText);
                for(i = 0; i < json.length; i++) {
                    console.log(json[i].description);
                    var myLatlng = new google.maps.LatLng(json[i].lat, json[i].lon);
                    console.log(myLatlng);
                    var marker = new google.maps.Marker({
                        position: myLatlng,
                        map: map,
                        title: 'Hello World!'
                    });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                        return function() {
                            var infowindow = new google.maps.InfoWindow();
                            infowindow.setContent(json[i].description);
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
          
                }
            }
          };
          xmlhttp.open("GET", url, true);
          xmlhttp.send();
    }
  }
 
    </script>
</head>
<body>
<div class="sidebar-container">
  <div class="sidebar-logo">
  <a href="{{ route('homepage') }}">
        <button class="btn btn-primary" type="button" style="background-color: #2574A9;">Gallery Store</button>
      </a>
  </div>
  <ul class="sidebar-navigation">
    <li class="header">Navigation</li>
    <li>
      <a href="{{ route('photo') }}">
        <i class="fa fa-home" aria-hidden="true"></i> Photo
      </a>
    </li>
    <li>
      <a href="{{ route('video') }}">
        <i class="fa fa-tachometer" aria-hidden="true"></i> Video
      </a>
    </li>
    <li>
      <a href="{{ route('settings') }}">
        <i class="fa fa-users" aria-hidden="true"></i> Settings
      </a>
    </li>
    <li>
      <a href="{{ route('information') }}">
        <i class="fa fa-cog" aria-hidden="true"></i> Information
      </a>
    </li>
    <li>
      <a href="{{ route('welcome') }}">
        <i class="fa fa-info-circle" aria-hidden="true"></i> Logout
      </a>
    </li>
  </ul>
</div>
<div id="map" style="float: right;"></div>


</body>
</html>