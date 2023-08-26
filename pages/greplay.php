<?php
session_start();
if(isset($_SESSION['admin']))
{
//  header("Location: ../mainpage.php");
 // exit();

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

<style>
body{
    background-image: url('../images/gallery/gpcimage1.jpg');   
    background-size:1500px 800px;
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
    document.forms['cform'].action='../adminmainpage.php';
    document.forms['cform'].submit();
}
</script>
</head>
<body>

<table style="width:auto;height:auto;" align="center">

<tr>
<th align="center" colspan="10" style="background-color:#03274B;color:white;"><h3>GOVERNMENT POLYTECHNIC COLLEGE MUTTOM GRIEVANCES BOARD</h3><form name="cform"><div align="right"><button onclick="cancel()" type="button" class="btn btn-danger">Cancel</button><form></div></th>
</tr>

<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Branch</th>
<th>Type</th>
<th>Registered By </th>
<th>Semester</th>
<th>Message</th>
<th>Replys</th>
<th>action</th>
</tr>

<?php
    $result = getData("select * from `geievance_register` WHERE `status`='reply'");
    if ($result->num_rows < 1) 
  {
      ?>
      <table  align="center">
      <tr>
      <th align="center" colspan="12" style="background-color:lightblue;color:black;"><h3><div align="center">No New Registrations</h3></div></th>
      </tr>
      <?php
  }
   else if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) {
?>
      <tr>
      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["Email"];?></td>
      <td><?php echo $row["Phone"];?></td>
      <td><?php echo $row["Branch"];?></td>
      <td><?php echo $row["Type"];?></td>
      <td><?php echo $row["RegisteardeBy"];?></td>
      <td><?php echo $row["Semester"];?></td>
      <td><?php echo $row["Message"];?></td>
      <td><?php echo $row["Replay"];?></td>

      <td><a href="replay.php?id=<?php echo $row['ID'] ?>">Reply</a></td>
      </tr>
      <?php 
      }
    } 
?>
</table>
<body>
</html>
<?php
}
else if(isset($_SESSION['cmmtyname']))
{
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

<style>
body{
    background-image: url('../images/gallery/gpcimage1.jpg');   
    background-size:1500px 800px;
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
    document.forms['cform'].action='../mainpage.php';
    document.forms['cform'].submit();
}
</script>
</head>
<body>

<table style="width:65%;height:90%;" align="center">

<tr>
<th align="center" colspan="10" style="background-color:#03274B;color:white;"><h3>GOVERNMENT POLYTECHNIC COLLEGE MUTTOM GRIEVANCES BOARD</h3><form name="cform"><div align="right"><button onclick="cancel()" type="button" class="btn btn-danger">Logout</button><form></div></th>
</tr>

<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Branch</th>
<th>Type</th>
<th>Registered By </th>
<th>Semester</th>
<th>Message</th>
<th>Replays</th>
<th>action</th>
</tr>

<?php
    $result = getData("select * from geievance_register");
    if ($result->num_rows > 0) 
    {
      while($row = $result->fetch_assoc()) {
?>
      <tr>
      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["Email"];?></td>
      <td><?php echo $row["Phone"];?></td>
      <td><?php echo $row["Branch"];?></td>
      <td><?php echo $row["Type"];?></td>
      <td><?php echo $row["RegisteardeBy"];?></td>
      <td><?php echo $row["Semester"];?></td>
      <td><?php echo $row["Message"];?></td>
      <td><?php echo $row["Replay"];?></td>

      <td><a href="replay.php?id=<?php echo $row['ID'] ?>">Replay</a></td>
      </tr>
      <?php 
      }
    } 
?>
</table>
<body>
</html>



    <?php
}
else{
    header("Location: ../mainpage.php");
    exit();  
}
?>
