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
  height: 3550px; /* only for demonstration, should be removed */
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
  height: 3550px; /* only for demonstration, should be removed */
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
  <h2>Activites</h2>
</header>

<section>
  <nav>
  <ul>
      <li><button class="button1">NSS</button></li>
      <li> </br>  </li>
      <a href="#ncc">
      <li><button class="button1">NCC</button></li>
      <li> </br>  </li></a>
      <a href="#bclub">
      <li><button class="button1">BIODIVERCITY CLUB</button></li>
      <li> </br>  </li></a>
      <a href="#arts">
      <li><button class="button1">ARTS</button></li>
      <li> </br>  </li></a>
      <a href="#sports">
      <li><button class="button1">SPORTS</button></li>
      <li> </br>  </li></a>
      <a href="#pta">
      <li><button class="button1">PTA</button></li>
      <li> </br>  </li></a>
      <a href="#pcell">
      <li><button class="button1">PLACEMENT CELL</button></li>
      <li> </br>  </li></a>
      <a href="#iedc">
      <li><button class="button1">IEDC</button></li></a>
    </ul>
  </nav>
  <article>
  <h2>National Service Scheme (NSS)</h2>
 <hr> 
 
 <div align="center">
<img height=20% width=90% src="images/gallery/nss.jpg">
</div> 
        	<p> The Motto of NSS "Not Me But You", reflects the essence of democratic living and upholds the need for self-less service.
              NSS helps the students to develop appreciation to other persons point of view and also to show consideration to other
               living beings. The philosophy of the NSS is well reflected in this motto, which underlines the belief that the welfare 
               of an individual is ultimately dependent on the welfare of the society on the whole and therefore, the NSS volunteers 
               shall strive for the well-being of the society. Technical Education has sanctioned one unit of national service scheme 
               to our college. Now we have one unit of NSS under the technical cell with a strength of 200 volunteers. The NSS unit
                of our college places an active role in shaping our students as humane and responsible citizens. The overall aim of
                 NSS is the Personality Development of students through community service. We are conducting special camping programmer
                  of seven days duration in adopted places and it provides unique opportunities to the students for group living, 
                  collective experience sharing, sharing responsibilities, addressing various developmental issues of regional and
                   national importance and constant interaction with the community.</p>

<h3>NSS Faculty</h3>
Ann Mary Joy	(Assistant Professor In English)
<a id="ncc"></a>
 <h2>National Cadet Corps (NCC) </h2> 
 <hr>
 <div align="center">
<img height=20% width=90% src="images/gallery/ncc.jpg">
</div> 
	 <p> Membership of the N.C.C is optional. The main purpose of the N.C.C is to provide military training to the students,
       inculcating in their minds the twin ideals of duty and discipline. Through training camps the N.C.C. provides valuable
        opportunities for developing one's physical and intellectual potential. Students who pass the B and C examinations will
         find it easy to get commissioned posts in the army. It may be noted that membership in the N.C.C. entitles one to get
          weightage in admissions to college courses. We have the Army wings of the N.C.C. in the campus.Army Wing.</p>


<ul>Company Commander: Lt. Vijayachandran Pillai (Dept. of Computer egg.)</ul>

<ul>Commanding Officer:Lt. Col. Aswin Dev(17K Bn NCC Palai)</ul>

<ul>Group Commander: M D Chacko (Kottayam)</ul>

<ul>The NCC Army Wing has an enrolled strength of 160, with 43 new cadets joining this year.</ul>

<ul>The Army Wing conducted 18 parades, rifle training and special training for map reading and disaster management to the cadets.</ul>

<ul>The Army Wing celebrated the Independence Day. Mr.Prakashan, Principal, hoisted the National Flag on the Independence Day and addressed the gathering.</ul>

<ul>The Army Wing celebrated the International Yoga Day. Mr.Prakashan, Principal, inaugurated the function and addressed the gathering.</ul>

<ul>Our cadets SU/O Rahul Reji and U/O Aby Paul participated in the Trucking Camp held in Kulamavu.</ul>

<ul>NCC army cadets gave a Guard of Honour to P J Joseph, Hon. Minister of Kerala, during the inauguration of our new block.</ul>

<h3>NCC Faculty</h3>
Vijayachandran Pillai 	(Dept. of Computer Engineering)



<a id="bclub"></a>
<h2>Biodiversity Club</h2> 
<hr>


        <p> The Biodiversity Club is a student club for pre-professional, transfer students interested in organical biology and conservation.
          We seek to interact with the scientific community and to contribute to the students educational growth, recreational needs,
           and personal development. In the past, the Biodiversity Club has held bi-weekly meetings for the purposes of discussing 
           conservation and biodiversity related topics in a social setting. In addition, we host educational seminars and enjoy
            professor-guided field trips which enable students to experience biodiversity hands on. Past Activities:Past volunteer
             work has included.</p>
<li>
<ul>Removal of invasive species</ul>

<ul>Caring for WMEACs rain garden/native plant nursery</ul>

<ul>Raising Monarch butterflies for release</ul>

<ul>Leading nature programs for area school children</ul>
</li>

<h3>Presentations</h3>
Discovering a new species

How to rear Monarch butterflies
</li>


<a id="arts"></a>
<h1>ARTS</h1> 
<hr>

	
        	<p> Our College has given due importance to cultural activities along with academic subjects for the all round 
			 development of the students.The Arts Festival is conducted by the Student's Union once in a year.It is a
			  two day,tear wise competition.The students who achieve first prize in the Arts Festival are sent to Interpoly
			   Competitions.The color of ARTS include 33 events some of them are Musical Events,Dance Events,Fine Arts,
			   Stage Events,Quiz Competition,Recitation,Elocution,Mock Press,Adzap,Debate,JAM,Kathaprasangam etc.</p>


 <a id="sports"></a>
<h2>SPORTS</h2> 
<hr>

        	 <p>Sports and Games form an integral part of Government Polytechnic College Muttom's total Educational Program.
              The College has been maintaining a high standard in almost all games during Sports and Athletic Meets among 
              inter poly competitions in Kerala. We always have strived hard to excel in the fields of sports and games as
               in the academic arena. Our College holds a very proud tradition of encouraging Athletes and Sports persons 
               in different fields. It has achieved an invincible track record in Sports and Games in Inter Poly competition.
                The Department is giving systematic training and coaching for players in various games throughout the year.
                 In order to give competitive experience and exposures, Our College teams participate in all the Inter
                  Collegiate Sports and Games Tournaments.</p>

<a id="pta"></a>
<h2>PTA(Parents and Teachers Assosiation)</h2> 
<hr>
	
              <p>We have a dynamic and efficient PTA always in the forefront for the benefit and betterment of the institution
               and its students. PTA meetings are conducted regularly to evaluate the progress of students, and discuss matters 
               affecting them.PTA funds are utilized for institutional as well as students activities such as Sports, Arts,
                Medicines, etc.</p>
<a id="pcell"></a>
<h2 >Placement Cell</h2> 
<hr>
	
        <p> Placement Cell caters for enhancing not only the employability skills of the passing out Students but also the overall 
         development of their personality. Placement Cell organizes on campus and off campus recruitments and pre-placement 
         training programmes through Aptitude tests, Group Discussions, Interviews and presentation skills in collaboration 
         with the Finishing School. Close on the heels of placement drives, the Placement Assistance Cell makes an evaluation 
         of the performance of our students. This objective appraisal enables us to identify strengths and weaknesses of the
          candidates and select the strategies for improvement. Besides, we extend intensive supportive measures to the rejected
           candidates. Contact Placement Cell: placement@gptcmuttom.in</p>


<a id="iedc"></a>
<h2>Innovation and Entrepreneurship Development Centre(IEDC)</h2> 
<hr>
<img height=15% width=90% src="images/gallery/gpcImageBDC.jpg"><br><br>
	
        	The Innovation and Entrepreneurship Development Centre(IEDC) is an initiative of National Science and Technology Entrepreneurship Development Board(NSTEDB),Department of science and Technology(DST),New Delhi.The aim was to develop an institutional mechanism to create entrepreneurial culture in academic Institutions to faster growth of innovation and entrepreneurship amongst the faculty and students.Every year this centre provides financial support to a good number of students for developing innovative products.Up to one lakh rupees is made available for each idea.Apart from this financial support we are providing mentoring and infrastructural support for these projects.Also this centre arranges many classes and campus to promote technology based Innovation and Entrepreneurship among the Students.

<h3> Inspiration Behind The Starting Of IEDC</h3>

<li>
<ul> Many of our students have shown consistent interest to get more knowledge about Entrepreneurship to be competent in the modern world</ul>

<ul>A good many of our students and teachers have successfully used their talents to develop innovative products and own several national level project contests and got funds for product Development from various research and Development Institutes around the country.</ul>

<ul>There are no other centers in our District or Neighboring Districts for guidance in the field of Entrepreneurship</ul>

<ul>The scope of rural technology development is very high because our College is located in a rural setting with most people depending on traditional farming methods.</ul>
 
</li>    
  </article>
</section>

</body>
</html>


<?php
include_once "footer.php";
?>