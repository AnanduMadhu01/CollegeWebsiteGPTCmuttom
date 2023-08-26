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

<style>
body{
    background-image: url('../images/gallery/gpcimage1.jpg');
    font-family: "Times New Roman", Times, serif;   
    background-size:1500px 800px;
    background-color: lightblue;
}
h1{
  font-family: "Times New Roman", Times, serif;
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
function gotonotification()
{
    document.forms['cform'].action='alumninotifications.php';
    document.forms['cform'].submit();
}
function gotoedit()
{
    document.forms['cform'].action='pages/alumninotedit.php';
    document.forms['cform'].submit();
}
</script>
</head>
<?php
if(isset($_POST['search']))
{
  $committee=$_POST['cname'];
  $_SESSION['cname']=$committee;
}
else if(isset($_POST['add']))
{
  $committee=$_POST['cname'];
  $_SESSION['cname']=$committee;
  header("Location:adminaddcmtymember.php");
}
?>
<body bgcolor="blue">
<center><h1>Government Polytechnic College Muttom Alumni Details </h1></center>
<hr>
<form method="post" action="" name="cform">
<div class="form-group">
  <label for="sel1"><b>Select Branch:</b></label>
  <select class="form-control" id="sel1" name="cname" required>
    <option class="hidden" value="" selected disabled>Select Branch........*</option>  
    <option value="computer"> Computer Engineering</option>
    <option value="mechanical"> Mechanic Engineering </option>
    <option value="civil">Civil Engineering </option>
    <option value="electrical"> Electrical Engineering </option>
    <option value="electronics"> Electronics Engineering </option>
  </select>
  <button type="submit" name="search" class="btn btn-primary">View List</button>
  <button onclick="gotonotification()" type="button" name="add" class="btn btn-primary">Add Notification</button>
  <button onclick="gotoedit()" type="button" name="edit" class="btn btn-primary">Edit Notification</button>
  <button onclick="cancel()" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
<?php
if(isset($_POST['search']))
{
    $branch=$_SESSION['cname'];
    $result = getData("select * from `alumni_registration` where `Aproval`='approved' AND `Branch`='$branch' ORDER BY `YearOfPass` DESC");
    if ($result->num_rows > 0) 
    {
      
?>
<table style="width:auto;height:auto" align="center">
<tr>
<th align="center" colspan="10" style="background-color:#03274B;color:white;"><h3><div align="center"><?php echo $branch?></h3></div></th>
</tr>
<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Branch</th>
<th>Year Of Pass</th>
<th>Phone</th>
</tr>
<?php
  while($row = $result->fetch_assoc())
  {
    ?>
<tr>
      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["Branch"];?></td>
      <td><?php echo $row["YearOfPass"];?></td>
      <td><?php echo $row["Phone"];?></td>
</tr>

      <?php 
      }
    }
    else{
        ?>
        <table style="width:auto;height:auto" align="center">
        <tr>
        <th align="center" colspan="10" style="background-color:#03274B;color:white;"><h3><div align="center">Not Any Approved List </h3></div></th>
        </tr>
    </table>
        <?php
    } 
  }
?>
</table>
<body>
</html>
