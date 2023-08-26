<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
?>
<?php
include_once "../dbactions.php";
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
button{
    position: fixed;
    top:90%;
    left: 90%;
    width: 100px;
    height: 50px;
}
</style>
<script>
function cancel()
{
    document.forms['cform'].action='../adminalumnilist.php';
    document.forms['cform'].submit();
}
</script>
</head>
<body bgcolor="blue">
<center><h1>Government Polytechnic College Muttom Alumni Notifications </h1></center>
<hr>
    <div class="container">
    <form method="post" name="cform" class="form-horizontal" action="">
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="button" class="btn btn-danger" onclick="cancel()">Back</button>
        </div>
      </div>
    </form>
  </div>

  <?php 
  $sql="select * from `alimninotification` where `status`='active'";
  $result = getData($sql);
  if ($result->num_rows < 1) 
  {
      ?>
      <table  align="center">
      <tr>
      <th align="center" colspan="12" style="background-color:lightblue;color:black;"><h3><div align="center">No Active Notifications</h3></div></th>
      </tr>
      <?php
  }
  else if ($result->num_rows > 0) 
  {      
?>
<table  align="center">
<tr>
<th align="center" colspan="12" style="background-color:lightblue;color:black;"><h3><div align="center">Active Notification List</h3></div></th>
</tr>
<tr style="background-color:#32A9EE;color:white;">
<th>Notifications</th>
<th>Action</th>
</tr>
<?php
while($row = $result->fetch_assoc())
{
  ?>
<tr>
    <td><?php echo $row["notifications"];?></td>
    <td><a href="../functions/deletealumninotification.php?id=<?php echo $row['id'] ?>">Delete</a></td>

</tr>
    <?php 
    }
  } 
?>
</table>
<body>
</html>
