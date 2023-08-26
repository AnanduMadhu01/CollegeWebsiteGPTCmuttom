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
  <h2>General Workshop</h2>
</header>

<section>
  <nav>
  <ul>
  <form action="officelayout.php" method="get">
      <li><button class="button1">General Workshop</button></li>
      <li> </br>  </li></form>
      <a href="#fitting">
      <li><button class="button1">FITTING</button></li>
      <li> </br>  </li></a>
      <a href="#carpentry">
      <li><button class="button1">CARPENTRY</button></li>
      <li> </br>  </li></a>
      <a href="#sheet">
      <li><button class="button1">SHEET METAL</button></li>
      <li> </br>  </li></a>
      <a href="#smithy">
      <li><button class="button1">SMITHY</button></li>
      <li> </br>  </li></a>
      <a href="#foundry">
      <li><button class="button1">FOUNDRY</button></li>
      <li> </br>  </li></a>
      <a href="#welding">
      <li><button class="button1">WELDING</button></li>
      <li> </br>  </li></a>

    </ul>
    
    
  </nav>
  
  <article>
 
<html>
<head>
<title>GENERAL WORKSHOP</title>
</head>
<style>
td{
    font-family:Times New Roman;}
table{
width:100%;
}
td{
height:50px;
}
</style>

<body bgcolor="lightblue">
<h1>GENERAL WORKSHOP</h1> 
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/workshop.jpg">
</div> <br><br>
	General Workshop forms an integral part of the Institution as it is heavily involved in carrying out the practical oriented study of various manufacturing activities with the help of some sophisticted equipment and machineries and tools.
	Basic Engineering Workshop curriculum is framed in all Engineering/Technology Diploma programmes so as to make all the students proficient in the use of hand tools,equipments and machineries in various workshop sections like Welding, Carpentry,Fitting,Sheet Metal,Smithy and Foundry.Also with the assistance of quality supporting staff,studentsare able to carry out the fabrication work for their project work as part of their course study.



<a id="fitting"></a>
<h2>FITTING SECTION</h2> 
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/fitting.jpg">
</div> <br><br>
	In fitting shop various processes are performed on metals to give them desired shape and size and fit them with mating part. Both ferrous and non ferrous metals are dealt in this section.

<h3>LAB FACULTY</h3>
<table border=1 style="width:60%;">
<tr>
<th><h3>Name</h3></th>
<th><h3>Designation</h3></th>
</tr

<tr>
<td>Ajith Chandran</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Shibu P.R</td>
<td>Trade Instructor</td>
</tr>

<tr>
<td>Kiran M.</td>
<td>Tradesman</td>
</tr>

<tr>
<td>Dileesh D.S</td>
<td>Tradesman</td>
</tr>
</table>

<a id="carpentry"></a>
<h2>CARPENTRY SECTION</h2>
<hr>
	Carpentry is a skilled trade in which the primary work performed is the use of wood to construct items as large as buildings and as small as desk drawers. In carpentry shop students learn to do wood-work like to make wooden furniture, wooden articles etc.

<h3>LAB FACULTY</h3>
<table border=1 style="width:60%;">
<tr>
<th><h3>Name</h3></th>
<th><h3>Designation</h3></th>
</tr

<tr>
<td>Rahul C</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Sinimon T.C</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Siby Cyriac</td>
<td>Trade Instructor</td>
</tr>

<tr>
<td>Sasidharan K.S</td>
<td>Tradesamn</td>
</tr>

<tr>
<td>Robin Ambrose</td>
<td>Tradesamn</td>
</tr>
</table>


<a id="sheet"></a>
<h2>SHEET METAL SECTION</h2>
<hr>
	Provides with the necessary skills and techniques to work in the sheet metal fabrication occupation, giving you instruction in the use of portable power tools, sheet metal working equipment, shearing machine, bending machine etc. Learn to create various sheet metal articles such as trays, cups, jars, ducts etc.


<h3>LAB FACULTY</h3>
<table border=1 style="width:60%;">
<tr>
<th><h3>Name</h3></th>
<th><h3>Designation</h3></th>
</tr

<tr>
<td>Rahul C</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Sinimon T.C</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Siby Cyriac</td>
<td>Trade Instructor</td>
</tr>

<tr>
<td>Sasidharan K.S</td>
<td>Tradesamn</td>
</tr>

<tr>
<td>Robin Ambrose</td>
<td>Tradesamn</td>
</tr>
</table>

<a id="smithy"></a>
<h2>SMITHY SECTION</h2>
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/smithy.jpg">
</div> <br><br>
	Here students are trained how to create objects from wrought iron or steel by forging the metal by using tools to hammer, bend, and cut. Smithy Shop has various forges (manual and power) for heating purpose, different forging tools such as hammers. A power hammer is also provided in Smithy Shop. The students are emphasized on the correct dimensions and proper shape of the work piece.

<h3>LAB FACULTY</h3>
<table border=1 style="width:60%;">
<tr>
<th><h3>Name</h3></th>
<th><h3>Designation</h3></th>
</tr

<tr>
<td>Rahul C</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>
</table>


<a id="foundry"></a>
<h2>FOUNDRY SECTION</h2>
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/gpc11.jpg">
</div> <br><br>
	Here students are getting awareness about Moulding & Casting Processes as well as appropriate safety procedures. Green sand moulds are normally practiced here.

<h3>LAB FACULTY</h3>
<table border=1 style="width:60%;">
<tr>
<th><h3>Name</h3></th>
<th><h3>Designation</h3></th>
</tr

<tr>
<td>Sinimon T.C</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Binu T. Blakrishnan</td>
<td>Trade Instructor</td>
</tr>
</table>


<a id="welding"></a>
<h2>WELDING SECTION</h2>
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/welding.jpg">
</div> <br><br>
	A well maintained and advanced Welding section is another attraction of the General Workshop. Welding Provides hands on introduction to the common welding processes used in industry. Course will include SMAW, Oxy-acetylene Gas welding, MIG, TIG as well as appropriate safety procedures. Also students are trained to carry out the fabrication work for their project work.

<h3>LAB FACULTY</h3>
<table border=1 style="width:60%;">
<tr>
<th><h3>Name</h3></th>
<th><h3>Designation</h3></th>
</tr

<tr>
<td>Ajith Chandran</td>
<td>Workshop Instructor&Workshop In charge</td>
</tr>

<tr>
<td>Shibu P.R</td>
<td>Trade Instructor</td>
</tr>

<tr>
<td>Kiran M.</td>
<td>Tradesman</td>
</tr>

<tr>
<td>Dileesh D.S</td>
<td>Tradesman</td>
</tr>
</table>
</body>
</html>


 
  </article>
</section>

</body>
</html>


<?php
include_once "footer.php";
?>