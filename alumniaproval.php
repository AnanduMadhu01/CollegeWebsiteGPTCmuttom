<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: mainpage.php");
  exit();
}
include_once "dbactions.php";
$id=$_GET['id'];
echo $id;
$sql="UPDATE `alumni_registration` SET `Aproval`='approved' where `Id`='$id'";
$result = getData($sql);
if(setData($sql))
    {
        header("Location: staffalumniaproval1.php");
        exit();   
    }
?>