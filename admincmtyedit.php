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
<center><h1>Government Polytechnic College Muttom Committee Details </h1></center>
<hr>
<form method="post" action="" name="cform">
<div class="form-group">
  <label for="sel1"><b>Select Committee:</b></label>
  <select class="form-control" id="sel1" name="cname" required>
    <option class="hidden" value="" selected disabled>Select Committee........*</option>  
    <option>anti_ragging_committee</option>
    <option>anti_ragging_squad</option>
    <option>greivance_redressal_committee</option>
    <option>guidance_and_conseling_committee</option>
    <option>internal_complaints_committee</option>
    <option>sc_st_committee</option>
  </select>
  <button type="submit" name="search" class="btn btn-primary">View List</button>
  <button type="submit" name="add" class="btn btn-primary">Add Members</button>
  <button onclick="cancel()" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
<?php
if(isset($_POST['search']))
{
    $committe=$_SESSION['cname'];
    $result = getData("select * from `$committe` where `Now`='active'");
    if ($result->num_rows > 0) 
    {
      
?>
<table style="width:auto;height:auto;" align="center">
<tr>
<th align="center" colspan="10" style="background-color:#03274B;color:white;"><h3><div align="center"><?php echo $committee?></h3></div></th>
</tr>
<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Address</th>
<th>Designation</th>
<th>Action</th>
</tr>
<?php
  while($row = $result->fetch_assoc())
  {
    ?>
<tr>
      <td><?php echo $row["NAME"];?></td>
      <td><?php echo $row["ADDRESS"];?></td>
      <td><?php echo $row["DESIGNATION"];?></td>

      <td><a href="admincmtyupdate.php?id=<?php echo $row['SLNO'] ?>">Edit</a></td>
</tr>
      <?php 
      }
    } 
  }
?>
</table>
<body>
</html>
