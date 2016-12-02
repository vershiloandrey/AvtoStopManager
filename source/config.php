<?php
session_start();

$temp = 0;

$host = "localhost";
$db_name = "id26338_travel";
$login = "id26338_travelaccount";
$pswrd = "14051997";


if(isset($_POST['first_name'])){

   $connect = mysqli_connect("Localhost", "id26338_travelaccount","14051997", "id26338_travel");

   if (!$connect){
      echo "Не работает!<br>";
      exit(mysql_error());
   } else{
      echo "YEAH";
      $result = mysqli_query ($connect, "SELECT * FROM users");
      if ($result) {
         echo "la";
      }
      while( $row = mysqli_fetch_assoc($result) ){ 
	  if($row['id'] === $_POST['identificator']){
              echo "найден";
 $temp++;
              if($row['phone'] === $_POST['phone']){
                 $_SESSION['name'] = $row['first_name'];
               
              } else{
                header("Location: auth.html?error");
              }
          }
      }
      if(!$temp){
             $rs = mysqli_query ($connect, "INSERT INTO users VALUES ('".$_POST['last_name']."', '".$_POST['first_name']."', '".$_POST['identificator']."', '".$_POST['phone']."','0')");
             if($rs){echo "add"; $_SESSION['name'] = $_POST['first_name'];}
      }
}
   mysqli_close ($connect);

} else {echo "don't input1";}
header("Location: index.php");
?>