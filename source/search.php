<?php
session_start();
if(!isset($_SESSION['name'])){
   header('location: auth.html');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TRAVEL ONLINE</title>
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="css/search.css">
</head>

<body>
    <div id="map"></div>
    <div id="left-panel">
        <input id="pac-input" class="controls" type="text"
        placeholder="Enter the place">
        <div id="wayList"></div>
       
    </div>
    <script src="downloadMap.js"></script>
     <div class="menu">
                <li><a href="index.php">Главная</a></li>
                <li><a href="new_route.php">Задать свой маршрут</a></li>
                <li><a href="search.php">Найти попутчика</a></li>
                <li><a id="savebutton" href="search.php?search=true">Искать</a></li>
                <li><a href="search.php?clear=true">Очистить запрос</a></li>
            </div>
     <div id="footer">
        &copy; Андрей Вершило
    </div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSmYZkqEAjC_Z12NGxImwkHLCqGG_iafA&libraries=places&signed_in=true&callback=initMap"
        async defer></script>
</body>
</html>