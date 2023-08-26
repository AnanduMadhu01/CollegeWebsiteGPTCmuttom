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
  <h2>Electrical & Electronic Engineering</h2>
</header>

<section>
  <nav>
  <ul>
  <form action="eeelayout.php" method="get">
      <li><button class="button1">Home</button></li>
      <li> </br>  </li></form>

      <li><a href="https://tekerala.org/student_detailss/index.php"><button  class="button1">Internal</button></li></a>

    </ul>
    
    <table>
	<tr>
		<h2>VISSION</h2>
	</tr>
	<tr>
		<td>To emerge as a centre of excellence in Electrical and Electronics Engineering and make experts in smart technological scenario of learning with commitment to the society.</td>
     </table>
     <table>
	<tr>
		<h2>MISSION</h2>
	</tr>
	<tr>
		<li>
        Empowering the students with excellent technological skills and knowledge.
        <ul>Enabling the student to adapt with the industrial needs of technology.</ul>
        <ul>Encouraging the student to apply their knowledge passion and skills in the pursuit of humanitarian goals and social commitments.</ul>
		</li>
	</tr>
      </table>
  </nav>
  
  <article>
  <?php
  include_once "eeesylbs.php";?>   
  </article>
</section>

</body>
</html>


<?php
include_once "footer.php";
?>