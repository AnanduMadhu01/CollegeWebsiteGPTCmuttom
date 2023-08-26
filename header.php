<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Education Time
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style>
button
{
    border: none;
    outline: none;
    color: #fff;
    background: #03274B;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5p;
}
  </style>
  <?php
                $mysql=new mysqli('localhost','root','','college_website');
                 $sql="SELECT * FROM `mandatory_disclosure`";
                $result=$mysql->query($sql);
                if ($result->num_rows > 0) 
                  {
                    while($row = $result->fetch_assoc()) 
                    {
                      $file=$row['pdf'];                     
                    }
                  }                  
              ?>
<script>
  function gotologin()
  {
    document.forms['btn'].action='stafflogin.php';
    document.forms['btn'].submit();
  }
  
  </script>
<title>GovernmentPolytechnicCollegeMuttom</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" href="layout/styles/styles.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- liteAccordion is Homepage Only -->
<link rel="stylesheet" href="layout/scripts/liteaccordion-v2.2/css/liteaccordion.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
      <table>
      <tr>
        <td>
          <img width="180" height="150" src="/website/images/logo.jpeg"  alt="image is loading....">
        </td>
        <td>
        <h1>Government Polytechnic College Muttom</h1>
       <p>Muttom Post, Thodupuzha, Idukki, PIN:685587</p>
       <p>mob:+91 4862256412,Fax: +91 4862 256412</p>
       <p>Email: gptcmuttom@yahoo.co.in</p>
       <div align="right">
        <form name="btn">   
       <button style="font-family: 'Times New Roman'; font-size: 15px;" onclick="gotologin();"><i class="fa fa-fw fa-user"></i>Staff Login</button></form>

      </td>
    </tr>
    </table>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row2">
  <div id="topnav">
    <ul>
      <li class="active"><a href="mainpage.php"><i class="fa fa-home"></i>Home</a></li>
      <li><a href="#">About Us</a>
        <ul>
          <li><a href="mainpage.php#about">About</a></li>
          <li><a href="pages/uploads/pdf/<?php echo $file;?>">Mandatory Disclosure</a></li>
          <li><a href="committeelayout.php">Committees</a></li>
        </ul>
      </li>
      <li ><a href="#">Departments</a>
        <ul>
          <li><a href="mechlayout.php">MECHANICAL ENGINEERING</a></li>
          <li><a href="cvllayout.php">CIVIL ENGINEERING</a></li>
          <li><a href="ctlayout.php">COMPUTER ENGINEERING</a></li>
          <li><a href="eeelayout.php">ELECTRICAL & ELECTRONICS ENGINEERING</a></li>
          <li><a href="elslayout.php">ELECTRONICS ENGINEERING</a></li>
          <li><a href="generallayout.php">GENERAL DEPARTMENT</a></li>
          <li><a href="officelayout.php ">OFFICE ADMINISTRATIONS</a></li>
          <li><a href="workshoplayout.php ">Workshop</a></li>
        </ul>
      </li>
      <li><a href="facility.php">Facilities</a>
        <ul>
          <li><a href="facility.php">Library</a></li>
          <li><a href="facility.php#ccl">Common Computing Lab</a></li>
          <li><a href="facility.php#llab">Language Lab</a></li>
          <li><a href="facility.php#hostel">Mens-Hostel</a></li>
          <li><a href="facility.php#store">Store</a></li>
          <li><a href="facility.php#canteen">Canteen</a></li>
        </ul>
      </li>
      <li><a href="activity.php">Activities</a>
        <ul>
          <li><a href="activity.php">NSS</a></li>
          <li><a href="activity.php#ncc">NCC</a></li>
          <li><a href="activity.php#bclub">Biodiversity Lab</a></li>
          <li><a href="activity.php#arts">Arts</a></li>
          <li><a href="activity.php#sports">Sports</a></li>
          <li><a href="activity.php#pta">PTA</a></li>
          <li><a href="activity.php#pcell">Placement Cell</a></li>
          <li><a href="activity.php#iedc">IEDC</a></li>
        </ul>
      </li>
      <li><a href="staffdetails.php">Staff Details</a> 
        <ul>
          <li><a href="staffdetails.php">MECHANICAL ENGINEERING</a></li>
          <li><a href="staffdetails.php#civil">CIVIL ENGINEERING</a></li>
          <li><a href="staffdetails.php#computer">COMPUTER ENGINEERING</a></li>
          <li><a href="staffdetails.php#electrical">ELECTRICAL & ELECTRONICS ENGINEERING</a></li>
          <li><a href="staffdetails.php#electronics">ELECTRONICS ENGINEERING</a></li>
          <li><a href="staffdetails.php#general">GENERAL DEPARTMENT</a></li>
          <li><a href="staffdetails.php#administrative">ADMINISTRATIVE STAFF</a></li>
        </ul>
      </li>
      <li><a href="gallery1.php">Gallery</a></li>
      <li><a href="pages/grievance.php">Grievance</a></li>
      <li  class="last"><a href="contactdetails.php">Contact Details</a></li>
    </ul>
    <div  class="clear"></div>
  </div>
</div>