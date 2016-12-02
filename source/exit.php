<?php
session_start();

if(isset($_GET['exeit'])){
  session_unset();
}
header("Location: auth.html");
?>