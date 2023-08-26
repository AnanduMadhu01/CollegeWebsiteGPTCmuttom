
<?php
session_start();
if(isset($_SESSION['department']))
{
  include_once "staffheader.php"; 
  include_once "dbactions.php";
}
else if(isset($_SESSION['admin']))
{
  include_once "adminheader.php";
  include_once "dbactions.php";
}
else{
include_once "header.php";
include_once "dbactions.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 5px;
  text-align: center;
  font-size: 25px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 25%;
  height: auto; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 75%;
  background-color: #f1f1f1;
  height: auto; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}
/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
.button1 {
  display: inline-block;
  padding: 15px 25px;
  width:100%;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #191970;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color: #6A5ACD}

.button1:active {
  background-color: blue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body  style="color:black">
<header>
  <h2>Staff Details</h2>
</header>

<section>
  <nav>
  <ul>
      <li><button class="button1">Computer Engineering</button></li>
      <li> </br>  </li>
      <a href="#civil">
      <li><button class="button1">Civil Engineering</button></li>
      <li> </br>  </li></a>
      <a href="#electrical">
      <li><button class="button1">Electrical Engineering</button></li>
      <li> </br>  </li></a>
      <a href="#mechanic">
      <li><button class="button1">Mechanical Engineering</button></li>
      <li> </br>  </li></a>
      <a href="#electronice">
      <li><button class="button1">Electronics Engineering</button></li>
      <li> </br>  </li></a>
      <a href="#general">
      <li><button class="button1">General Department</button></li>
      <li> </br>  </li></a>
      <a href="#administrative">
      <li><button class="button1">Administrative Staff</button></li>
      <li> </br>  </li></a>


    </ul>
  </nav>
  
  <article>
  <div class="container-fluid">
<h1>Mechanical Engineering Department</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from mechanical");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="civil"></a>
<div class="container-fluid">
<h1>Civil Engineering Department</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from civil");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="computer"></a>
<div class="container-fluid">
<h1>Computer Engineering Department</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from computer");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="electrical"></a>
<a id="computer"></a>
<div class="container-fluid">
<h1>Electrical Engineering Department</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from electrical");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="electronics"></a>
<div class="container-fluid">
<h1>Electronics Engineering Department</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from electronics");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="general"></a>
<a id="computer"></a>
<div class="container-fluid">
<h1>General Department</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from general");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="administrative"></a>
<div class="container-fluid">
<h1>Administrive Staff</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>NAME</th>
        <th>DESIGNATION</th>
        <th>QUALIFICATION</th>
    </tr>
    <?php
    $result = getData("select * from administrative_staff");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>
                <td><?php echo $row["QUALIFICATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
  </article>
</section>

</body>
</html>


<?php
include_once "footer.php";
?>