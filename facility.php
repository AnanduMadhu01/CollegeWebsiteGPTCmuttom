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
  height: 4000px; /* only for demonstration, should be removed */
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
  height: 4000px; /* only for demonstration, should be removed */
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
  <h2>Facilities</h2>
</header>

<section>
  <nav>
  <ul>
      <li><button class="button1">LLIBRARY</button></li>
      <li> </br>  </li>
      <a href="#llab">
      <li><button class="button1">LANGUAGE LAB</button></li>
      <li> </br>  </li></a>
      <a href="#ccl">
      <li><button class="button1">COMMAN COMPUTING LAB</button></li>
      <li> </br>  </li></a>
      <a href="#store">
      <li><button class="button1">STORE</button></li>
      <li> </br>  </li></a>
      <a href="#hostel">
      <li><button class="button1">MENS-HOSTEL</button></li>
      <li> </br>  </li></a>
      <a href="#canteen">
      <li><button class="button1">CANTEEN</button></li></a>
    

    </ul>
  </nav>
  
  <article>
  
  <h2>LIBRARY</h2> 
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/Library.jpg">
</div> 
      </p>The Library GPC Muttom carries a full range of materials to support the curriculum and the lifelong learning needs 
      of our students, staff, and community members. Key services and collections include reference, bibliographic 
      instruction, circulation/reserves, print materials, audiovisual materials, electronic resources, internet access, 
      and individual and group study areas. More than 8500 titles of technical books available in this library. The
       Library's mission statement reads as follows: The mission of the Library is to support student learning and 
       excellence in teaching, provide access to learning resources in all formats, assist students in locating and
        evaluating information, and encourage lifelong learning.Our library is a quiet and peaceful ambience where
         students can take a book,sit in a corner and delve into the depths of knowledge it provides.</p>

<h3>Library Staff</h3>
	Reeba Merin Joseph		(Librarian Grade III)<br>
	T.G.Rajeev			(Non Technical Attender)

<h3>Working Hours</h3>
<p>The library shall be kept open on all working days </p>
<h3>8:30 AM  -   5:00 PM</h3>
<h3>Working Days</h3>
       <p>The Library shall kept closedon all public and national holidays , Second Saturdays , Sundays , and any other
        holidays declared by the Central/State government from time to time.</p>

<a id="llab"></a>
<h2>LANGUAGE LAB</h2> 
<hr>
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/languagelab.jpg">
</div> 
	  <p>A Language Laboratory is a dedicated space for English Language Learning where students access audio or audio-visual
   materials.They allow the Lab faculty to listen to and manage student audio,which is delivered to individual students
    through headsets or in isolated 'Sound Booths'.Good communication skills is a key factor in increasing the
     employability of the learners. A Language Lab has been set up in the institution which offers the students a 
     platform to learn and improve their communication skills at their own place. </p>

<h3>Lab Faculty</h3>
	Ann Mary Joy	(Assistant Professor In English)

  <a id="ccl"></a>
<h2>COMMON COMPUTER LAB</h2> 
<hr>
<div align="center">
<img height=10% width=90% src="images/gallery/commonlab.jpg">
</div> 
      <p>	Common Computer Centre is a Central facility, established in Govt Polytechnic College Muttom which caters to
       the need of academic departments and various sections of the academic departments and various sections of the
        Institute.Common Computer Centre is instituted in a seperate Room.It provides Internet Facilities to the users
         in the Common Computer Centre, all Department Students,Staffs,Faculty Each member of this institute is provided 
         with a unique log-in ID to make the best use of the facility. Common Computer Centre is dedicated to create and
          maintain a computing environment providing quality proffessional service to students,staff and administration.</p>

<h3>Lab Faculty</h3>
Jickson John	(Workshop Instructor in Electrical Engineering)

<a id="store"></a>
<h2>CO-OPERATIVE STORE</h2> 
<hr>
<div align="center">
<img height=20% width=90% src="images/gallery/store.jpg">
</div> 
<bt>
       <p>There is a co-operative store in the campus run by the GPC Muttom Co-operative Society. All the staff and 
       students are members of the society. The profit is shared with the members and so materials are sold at rates
        lower than the market rates. It provides various stationary items, notebooks, practical record books, 
        assignment books, textbooks and various application forms to the students of the college at lower prices.
         It produces and supplies note books and assignment books bearing the name of the college. The store is open
          on all working days, throughout the working time of the college.</p>

<a id="hostel"></a>
<h2>MEN'S HOSTEL</h2> 
<hr>
(<img src="home/user/gopika/nameofimage.jpg">)
	     <p>One of the star attractions of our College is the excellent Hostel facilities for Boys.The campus hostel is
        taken care of by our Government.There is Telephonic access to all students but Mobile Phone is banned as it in
         the College.Affectionate discipline, Tasty food at moderate rates and Neat rooms with modern sanitation and 
         proffessional laundry services are the hallmarks of the Polytechnic Hostels.</p>

 <a id="canteen"></a>
<h2>College Canteen</h2> 
<hr>
        	 <p>Canteens and cafeterias are one of the important parts of students life where you can find most of students
            chatting and gossiping on different topics.It plays a vital role in removing tensions and refreshing students.
            The college canteen provides enough and delicious food at affordable rates.GPC Muttom has the facility of 
            clean and hygienic canteen that caters to the taste of all students.The canteen remains open on all working 
            days.It provides all type of nutritious and hygenic eatables and beverages to cater to the students , staff 
            and visitors. </p>


  </article>
</section>

</body>
</html>


<?php
include_once "footer.php";
?>