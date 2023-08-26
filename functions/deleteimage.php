<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
include_once "../dbactions.php";
$id=$_GET['id'];
echo $id;
$sql="UPDATE `gallery` SET `Status`='notactive' where `Id`='$id'";
$result = getData($sql);
if(setData($sql))
    {
        header("Location: ../admingallery1.php");
        exit();   
    }
?>