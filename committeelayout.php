<?php
session_start();
if(isset($_SESSION['department']))
{
  include_once "staffheader.php"; 
}
else if(isset($_SESSION['admin']))
{
  include_once "adminheader.php";
}
else{
include_once "header.php";
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
  <h2>Committee</h2>
</header>

<section>
  <nav>
  <ul>
      <li><button class="button1">Anti Ragging Squad</button></li>
      <li> </br>  </li>
      <a href="#AntiRagging">
      <li><button class="button1">Anti Ragging Committee</button></li>
      <li> </br>  </li></a>
      <a href="#Greivance">
      <li><button class="button1">Grievance Redressal Committee</button></li>
      <li> </br>  </li></a>
      <a href="#Complaints">
      <li><button class="button1">Internal Complaints Committee</button></li>
      <li> </br>  </li></a>
      <a href="#scst">
      <li><button class="button1">SC/ST Committee</button></li>
      <li> </br>  </li></a>
      <a href="#guidance">
      <li><button class="button1">Guidance and Conseling Committee</button></li></a>


    </ul>
  </nav>
  
  <article>
  
<?php
include_once "dbactions.php";
?>
<div class="container-fluid">
<h1>Anti Ragging Squad</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
    </tr>
    <?php
    $result = getData("select * from anti_ragging_squad");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["ADDRESS"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="AntiRagging"></a>
<div class="container-fluid">
<h1>Anti Ragging Committee</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
    </tr>
    <?php
    $result = getData("select * from Anti_Ragging_Committee");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["ADDRESS"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>

<hr>
<a id="Greivance"></a>
<div class="container-fluid">
<h1>Grievance Redressal Committee</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
    </tr>
    <?php
    $result = getData("select * from greivance_redressal_committee");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["ADDRESS"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>
<hr>
<a id="Complaints"></a>
<div class="container-fluid">
<h1>Internal Complaints Committee</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
    </tr>
    <?php
    $result = getData("select * from internal_complaints_committee");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["ADDRESS"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>

<hr>
<a id="scst"></a>
<div class="container-fluid">
<h1>sc/st Committee</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
    </tr>
    <?php
    $result = getData("select * from sc_st_committee");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["ADDRESS"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>


<hr>
<a id="guidance"></a>
<div class="container-fluid">
<h1>Guidance and Conseling Committee</h1>
<table class="table table-striped" border="5">
    <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Designation</th>
    </tr>
    <?php
    $result = getData("select * from guidance_and_conseling_committee");
    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) {
    ?>
            <tr>
                <td><?php echo $row["NAME"];?></td>
                <td><?php echo $row["ADDRESS"];?></td>
                <td><?php echo $row["DESIGNATION"];?></td>

            </tr>
    <?php 
      }
    } 
    ?>
</table>
</div>

 
  </article>
</section>

</body>
</html>


<?php
include_once "footer.php";
?>