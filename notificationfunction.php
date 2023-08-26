<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
include_once "dbactions.php";
$id=$_GET['id'];
echo $id;
$sql="UPDATE `notification` SET `Active`='notactive' where `id`='$id'";
$result = getData($sql);
if(setData($sql))
    {
        header("Location: admineditnotification.php");
        exit();   
    }
?>