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
    document.forms['cform'].action='adminmainpage.php';
    document.forms['cform'].submit();
}
</script>
<?php
if(isset($_POST['approved']))
{
  header("Location: staffalumniapproval.php");
  exit();   
}
?>
<?php
if(isset($_POST['add']))
{
  header("Location: adminaddnotification.php");
  exit();   
}
?>
</head>
<body bgcolor="blue">
<center><h1>Government Polytechnic College Muttom Notifications </h1></center>
<hr>
<div align="center">
<form method="post" action="" name="cform">
<div class="form-group">
  <button type="submit" name="active" class="btn btn-primary">Active Notifications</button>
  <button type="submit" name="alllist" class="btn btn-primary">All Notifications</button>
  <button type="submit" name="add" class="btn btn-primary">Add Notification</button>
  <button onclick="cancel()" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
</div>


<?php
if(isset($_POST['add']))
{
?>
    <div class="container">
    <form method="post" class="form-horizontal" action="notificationaddfun.php">
      <div class="form-group">
        <label style="color:white;" class="control-label col-sm-2" for="email">Enter Notification:</label>
        <div class="col-sm-10">
        <textarea class="form-control" name="notification" required></textarea>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>
  <?php
  

}
?>




<?php
if(isset($_POST['alllist']))
{
    $sql="select * from `notification`";
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
<th align="center" colspan="2" style="background-color:lightblue;color:black;"><h3><div align="center">All Notification List</h3></div></th>
</tr>
<tr style="background-color:#32A9EE;color:white;">
<th>Notifications</th>
</tr>
<?php
  while($row = $result->fetch_assoc())
  {
    ?>
<tr>
      <td><?php echo $row["notifications"];?></td>

</tr>
      <?php 
      }
    } 
}
?>
</table>
<br>
<br>


  <?php 
    $sql="select * from `notification` where `Active`='active'";
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
      <td><a href="notificationfunction.php?id=<?php echo $row['id'] ?>">Delete</a></td>

</tr>
      <?php 
      }
    } 
?>
</table>
<body>
</html>
