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
    <link rel="stylesheet" type="text/css" href="css/new_route.css">
</head>

<body>



<script src="downloadMap.js"></script>
<div id="map"></div>
<div id="left-panel">
        <input id="pac-input" class="controls" type="text"
        placeholder="Enter the place">
        <div id="wayList">
<?php
if (isset($_GET['waypt']))
{
$_SESSION['waypts'][] = $_GET['waypt'];
}

if (isset($_GET['u_name']))
{
$_SESSION['checkbox'][] = $_GET['u_name'];
}

else
{
    echo '<script type="text/javascript">';
    echo 'document.location.href="' . $_SERVER['REQUEST_URI'] . '?u_name=" + userName2';
    echo '</script>';
}

if(isset($_GET['save'])){
foreach ($_GET['save'] as $value)
{
   
}
}

$array = [];
if (isset($_SESSION['checkbox']))
{
foreach ($_SESSION['checkbox'] as $value)
{
array_push($array, $value);
  echo $array[count($array)-1];
echo "<br>";
?>
<script>var arr = []; arr.push("<?php echo $value; ?>");</script>
<?php
}
}  
?>
</div> 
</div>
</div>
     <div class="menu">
                <li><a href="index.php">Главная</a></li>
                <li><a href="new_route.php">Задать свой маршрут</a></li>
                <li><a href="search.php">Найти попутчика</a></li>
                <li><a id="savebutton" href="new_route.php?save=true">Сохранить маршрут</a></li>
                <li><a href="new_route.php?clear=true">Очистить карту</a></li>
            </div>

     <div id="footer">
        &copy; Андрей Вершило
    </div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSmYZkqEAjC_Z12NGxImwkHLCqGG_iafA&libraries=places&signed_in=true&callback=initMap"
        async defer></script>

</body>
</html>