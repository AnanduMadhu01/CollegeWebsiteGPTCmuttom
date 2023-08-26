<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: mainpage.php");
  exit();
}
?>
<?php
include_once "dbactions.php";
$branch= $_SESSION['department'];
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
    document.forms['cform'].action='staffmainpage.php';
    document.forms['cform'].submit();
}
</script>
<?php
if(isset($_POST['alllist']))
{
  header("Location: staffalumniaproval1.php");
  exit();   
}
?>
</head>
<body bgcolor="blue">
<center><h1>Government Polytechnic College Muttom Alumini Registrations </h1></center>
<hr>
<div align="center">
<form method="post" action="" name="cform">
<div class="form-group">
  <button type="submit" name="alllist" class="btn btn-primary">New Registrations</button>
  <button type="submit" name="approved" class="btn btn-primary">Approved List</button>
  <button onclick="cancel()" type="button" class="btn btn-danger">Cancel</button>
</div>
</form>
</div>

<?php
    $sql="select * from `alumni_registration` where `Branch`='$branch' && `Aproval`='approved'";
    $result = getData($sql);
    if ($result->num_rows < 1) 
    {
        ?>
        <table  align="center">
        <tr>
        <th align="center" colspan="12" style="background-color:lightblue;color:black;"><h3><div align="center">No Registrations Found</h3></div></th>
        </tr>
        <?php
    }
    else if ($result->num_rows > 0) 
    {
      
?>
<table  align="center">
<tr>
<th align="center" colspan="11" style="background-color:lightblue;color:black;"><h3><div align="center">Alumni Registration List</h3></div></th>
</tr>
<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>YearOfPass</th>
<th>DOB</th>
<th>Branch</th>
<th>Gender</th>
<th>Profession</th>
<th>Address</th>
<th>After_college</th>
<th>Memories</th>
</tr>
<?php
  while($row = $result->fetch_assoc())
  {
    ?>
<tr>
      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["Email"];?></td>
      <td><?php echo $row["Phone"];?></td>
      <td><?php echo $row["YearOfPass"];?></td>
      <td><?php echo $row["DOB"];?></td>
      <td><?php echo $row["Branch"];?></td>
      <td><?php echo $row["Gender"];?></td>
      <td><?php echo $row["Profession"];?></td>
      <td><?php echo $row["Address"];?></td>
      <td><?php echo $row["After_college"];?></td>
      <td><?php echo $row["Memories"];?></td>

</tr>
      <?php 
      }
    } 
?>
</table>

<body>
</html>
