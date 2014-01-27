<!DOCTYPE html>
<html>
  <head>
  <title>LAAF 2013 Schedule</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="jquery.mobile-1.0rc1.min.css" />
  <link rel="stylesheet" href="css/themes/LAAF.css" />
  <style type="text/css">
    #map_canvas {
      height:     100%;
      min-height: 320px;
      width:      100%;
      min-width:  200px;
    }
  </style>
  <script type="text/javascript" src="jquery-1.6.4.min.js"></script>
  <script type="text/javascript" src="jquery.mobile-1.0rc1.min.js"></script>
  <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-26399761-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

  </script>
</head>

<body>

<!-- Start of Map page -->
<div data-role="page" data-theme="a" id="map">

  <div data-role="header">
    <h1><img src="./images/laaf-logo-small.png" alt="LAAF"></h1>
    <div data-role="navbar">
      <ul>
       <li><a href="http://m.la-af.com/#schedule" rel="external" data-prefetch>Schedule</a></li>
       <li><a href="http://m.la-af.com/#masterclasses" rel="external" data-prefetch>Masterclasses</a></li>
       <li><a href="#map" class="ui-btn-active">Map</a></li>
      </ul>
    </div><!-- /navbar -->
  </div><!-- /header -->

  <div data-role="content">
    <div id="map_canvas"></div>
  </div><!-- /content -->

</div><!-- /page -->

<script type="text/javascript">
var setUpMap = function() {
  var latlng = new google.maps.LatLng(34.022147, -118.284001);
  var zoom   = 15;
  var georssLayer = new google.maps.KmlLayer('http://maps.google.com/maps/ms?vpsrc=1&ctz=240&vps=1&jsv=373i&ie=UTF8&authuser=0&msa=0&output=kml&msid=200234014924398842819.0004d09e9be7c048d5a92');
  var myOptions = {
    zoom:              zoom,
    center:            latlng,
    mapTypeId:         google.maps.MapTypeId.ROADMAP,
    streetViewControl: false,
    mapTypeControl:    false
  };
  var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  georssLayer.setMap(map);

  // Necessary to do this after loading KML because
  // KML re-centers the map
  map.setCenter(latlng);
  map.setZoom(zoom)
}
$(document).ready(setUpMap);
$('#map').pageBeforeShow(setUpMap);
</script>

</body>


</html>