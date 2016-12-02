<?php 
header('Content-type: text/html; charset=utf-8');
?>

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
    <script src="slideImage.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">
   
</head>
<body>
   
    <div id="container">
        <div id="leftcol">
            
            <div class="fix">
<ol>
                <li><a class="class1" href="index.php">Главная</a></li>
                <li><a class="class1" href="new_route.php">Задать свой маршрут</a></li>
                <li><a class="class1" href="search.php">Найти попутчика</a></li>
 </ol>
            </div>
          
            <div style='margin-top: 70px'>
                <img src='images/pic1.jpg' id="image_1" style="position: absolute;"  width="80%"/>
                <img src='images/pic2.jpg' id="image_2" style="opacity: 0; filter: alpha(opacity=0); position: absolute;"  width="80%" />
                <img src='images/pic3.jpg' id="image_3" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" width="80%"/>
                <img src='images/pic4.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0); position: absolute;"  width="80%"/>
                <img src='images/pic5.jpg' id="image_4" style="opacity: 0; filter: alpha(opacity=0); position: absolute;" width="80%"/>
            </div>
        </div>
        <div id="rightcol">
          <?php
if(isset($_SESSION['name'])){
      echo "Hello ".$_SESSION['name'];
   echo "</br><a href=\"exit.php?exeit\"><img src='images/exit.png' title='exit'/></a>";
   }
?>
        </div>
        <div class="clear"></div>
    </div>
    <div id="footer">
        &copy; Андрей Вершило
    </div>
</body>
</html>