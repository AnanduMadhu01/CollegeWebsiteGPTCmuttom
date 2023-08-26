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
<html>
<head>
<title>Contact details GPTC Muttom</title>
<link rel="stylesheet" href="layout.css" type="text/css">
</head>
<body>

<header>
  <h2>Contact Details</h2>
</header>

<section>
  <nav>
  <center>
    <p style="color:black">
      <strong>GOVT POLYTECHNIC COLLEGE MUTTOM</strong><br>
       Muttom Post, Thodupuzha,<br>
       Idukki Dist., Kerala. PIN 685587<br>
       Phone: +91 4862 255083<br>
       Fax: +91 4862 256412<br>
       Email: gptcmuttom@yahoo.co.in<br>
    </p></center>
  </nav>
  
  <article>
  <p>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3931.082120477354!2d76.73577631479289!3d9.84347009295861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07c674407e1329%3A0xe7920dbab7c9883b!2sGovernment%20Polytechnic%20College%2C%20Muttom!5e0!3m2!1sen!2sin!4v1582959704850!5m2!1sen!2sin"
     width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</p>
  </article>
</section>
</body>
</html>
<?php
include_once "footer.php";
?>