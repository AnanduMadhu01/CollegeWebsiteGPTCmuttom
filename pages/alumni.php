<html>
    <head>
        <title>Alumni Registration</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
        <link rel="stylesheet" type="text/css" href="js/Bootstrap.js">
        <style>
            *{
                margin:0px;
                padding:0px
            }
            body{
                background-image: url(images/alumni6.jpeg);
                background-size: cover;
                background-attachment: fixed;
                font-family:'Times New Roman';
            }
            h1{
                font-size: 40px;
                color: rgb(5, 236, 82);
                margin-top: 300px;
            }
            p{
                font-size: 17px;
                color: white;

            }
            h3{
                font-size: 25px;
                color: rgb(5, 236, 82);;
            }
            .glyphicon-pencil{
                font-size: 35px;
                color: white;
                float: right;
                margin-top: 20px;
            }
            .col-md-5{
                margin-top: 60px;
                box-shadow: -1px 1px 60px 10px black;
                background: rgba(0,0,0,0.4);
            }
            .label{
                font-weight: normal;
                margin-top: 15px;
                color: white;
                font-size: 15px;
            }
            .form-control{
                background:transparent;
                border-radius: 0px;
                border: 0px;
                border-bottom: 1px solid white;
                font-size: 18px;
                margin-top: 15px;
                height:40px;
                color: white;

            }
            input[type="radio"]{
                margin-top: 22px;
                color: greenyellow;
            }
            .btn-info{
                margin-top: 20px;
                font:18px;
                width:120px;
                margin-left: 80px;
                margin-bottom: 20px;
            }
            .btn-warning{
                margin-top: 20px;
                font:18px;
                width:120px;
                margin-left: 80px;
                margin-bottom: 20px;
            }
            img{
                position: absolute;
                margin-top: 60px;
                margin-left:100px ;
            }
        </style>
        <script>
            function cancel()
            {
                document.forms['regform'].action='../mainpage.php';
                document.forms['regform'].submit();
            }
            </script>

<?php
$_SESSION['message']='';
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
        $Name=$_POST['name'];
        $Email=$_POST['email'];
        $Phone=$_POST['phone'];
        $Year=$_POST['year'];
        $Dob=$_POST['dob'];
        $Branch=$_POST['branch'];
        $Gender=$_POST['gender'];
        $Profession=$_POST['profession'];
        $Address=$_POST['address'];
        $Lifeafter=$_POST['lifeafter'];
        $Memory=$_POST['memory'];

         $sql="INSERT INTO `alumni_registration` (`Name`, `Email`,`Phone`, `YearOfPass`,`DOB`, `Branch`,`Gender`,`Profession`,`Address`,`After_college`,`Memories`,`Aproval`)
          VALUES ('$Name', '$Email','$Phone', '$Year','$Dob', '$Branch','$Gender','$Profession','$Address','$Lifeafter','$Memory','notapproved')";
          
          if($mysql->query($sql)==true)
          {
              $_SESSION['message']="Registration successfull!";
              //header("location:header.php");
          }
          else
          {
            $_SESSION['message']="Registration Failed!";
          }
    }


?>





    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="container">
                    <img src="../images/slide/gpcImage1.jpg" class="img-circle" alt="Cinque Terre" width="304" height="236"> 
                    </div>
                    <h1 class="text-left">Government Polytechnic College Muttom,Alumni Registration Form</h1>
                    <p class="text-left">Welcome to the Alumni Association of your college. This is an initiative of 
                        Government Polytechnic College Muttom to reconnect the former students of GPTC Muttom with their 
                        college. Your story can make your teachers proud of you and inspire the current students of 
                        your college. You will get to meet with your batch mates,new students and faculties, Plan,
                         organise and attend the events and much more.<br>
                         Come, be the partner in transforming your college for our next generation.....</p>
                         <?php include_once "alumninotification.php"; ?>
                         <?php include_once "button.php"; ?>
                         <a style="top: 85%; left: 50%;" href="alumnigallery.php">Gallery</a><br>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="text-left">Registration Form</h3>
                        </div>
                        <div class="col-md-6">
                            <span class="glyphicon glyphicon-pencil"></span></div>
                    </div>
                    <hr>
                    <form method="POST" name="regform" action="">
                    <div class="alert alert-error" style="color:red;"><?=$_SESSION['message']?></div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" placeholder="Full name" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">E-mail</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Phone </label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="phone" placeholder="Phone Number" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Year of Passing </label>
                        <div class="col-md-10">
                            <input type="number" class="form-control" name="year" placeholder="Year of Passing" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">DOB</label>
                        <div class="col-md-10">
                            <input type="date" class="form-control" name="dob" placeholder="Date Of Birth" required> 
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Branch</label>
                        <div class="col-md-10">
                         <select class="form-control" name="branch" required>
                            <option value="">  </option>
                            <option value="computer"> Computer Engineering</option>
                            <option value="mechanical"> Mechanic Engineering </option>
                            <option value="civil">Civil Engineering </option>
                            <option value="electrical"> Electrical Engineering </option>
                            <option value="electronics"> Electronics Engineering </option>
                         </select>   
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Gender</label>
                        <div class="col-md-10">
                           <input type="radio" name="gender" value="male" name="gander" required><small style="color: white;">Male</small> 
                           <input type="radio" name="gender" value="female" name="gander" required><small style="color: white;">Female</small> 
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Profession</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="profession" placeholder="Profession" required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-2 control-label">Address</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="address" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-8 control-label">Where did life take you after GPTC Muttom?</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="lifeafter" required></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <label class="label col-md-8 control-label" >Fondest memories of life @GPTC Muttom</label>
                        <div class="col-md-12">
                            <textarea class="form-control" name="memory" required></textarea>
                        </div>
                    </div>
                    <button class="btn btn-info" type="submit">Submit
                    <button class="btn btn-warning" type="button" onclick="cancel();">Cancel</div>
                </form>
                </div>
            </div>
        </div>

    </body>
</html>