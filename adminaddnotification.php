<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
?>
<?php
include_once "dbactions.php";
?>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
body{
    background-image: url('../images/gallery/gpcimage1.jpg');
    font-family: "Times New Roman", Times, serif;   
    background-size:1500px 800px;
    background-color: #03274B;
}
h1{
  font-family: "Times New Roman", Times, serif;
  color: white;
}


table{
    border:1px solid black;
    border-collapse:collapse ;
	padding:0px;
}

th{
    padding:10px;
    border:1px solid black;

	
}

td{
    padding:10px;
     border:1px solid black;
	text-align:left;
}

tr:nth-child(even)
{
      background-color:white;
}

tr:nth-child(odd)
{
      background-color:#eee;
}

</style>
<script>
function cancel()
{
    document.forms['cform'].action='admineditnotification.php';
    document.forms['cform'].submit();
}
</script>
<?php
$mysql=new mysqli('localhost','root','','college_website');
if($_SERVER['REQUEST_METHOD']=='POST')
{
  $msg=$_POST['notification'];
  $sql="INSERT INTO `notification` (`notifications`,`Active`)
          VALUES ('$msg','active')"; 
          if($mysql->query($sql)==true)
          {
            header("Location: admineditnotification.php");
            exit();   
            }
 }
  
?>
</head>
<body bgcolor="blue">
<center><h1>Government Polytechnic College Muttom Notifications </h1></center>
<hr>

    <div class="container">
    <form method="post" name="cform" class="form-horizontal" action="">
      <div class="form-group">
        <label style="color:white;" class="control-label col-sm-2" for="email">Enter Notification:</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="notification" required></textarea>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
          <button type="button" class="btn btn-danger" onclick="cancel()">Back</button>
        </div>
      </div>
    </form>
  </div>
<body>
</html>
