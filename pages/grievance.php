
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<head>
<title>Grievance Registration</title>
<style>
.register{
    background: -webkit-linear-gradient(left, #03274B, #3931af);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<script>
function cancel()
{
    document.forms['loginform'].action='../mainpage.php';
    document.forms['loginform'].submit();
}
</script>
<?php
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($_POST['bot']=="5")
    {

        $Username=$_POST['name'];
        $Email=$_POST['email'];
        $Phone=$_POST['phone'];
        $Branch=$_POST['branch'];
        $Type= $_POST['type'];
        $RBy=$_POST['by'];
        $Semester=$_POST['semester'];
        $Robot=$_POST['bot'];
        $Message=$_POST['message'];
        $Replay="Your Form is still processing!";
         $sql="INSERT INTO `geievance_register` (`Name`, `Email`, `Phone`, `Branch`, `Type`, `RegisteardeBy`, `Semester`, `Message`,`Replay`)
          VALUES ('$Username', '$Email', '$Phone', '$Branch', '$Type', '$RBy', '$Semester', '$Message','$Replay')";

          if($mysql->query($sql)==true)
          {
            echo "<script>alert('Thanku You..! We will replay you as fast as we can');</script>";
          }
          else
          {
            echo "<script>alert('Registration Failed');</script>";
          }
    }
    else
    {
        echo "<script>alert('fail in robot test');</script>";
    }

}
?> 
<body>
<form name="loginform" method="POST" action="grievance.php">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Register your Grievance message here!   We will find solutions</p>
                    </div>
                    
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="grievance.php" role="tab" aria-controls="home" aria-selected="true">new</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="gstatus.php" role="tab" aria-controls="profile" aria-selected="false">Check status</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">GOVERNMENT POLYTECHNIC COLLEGE MUTTOM GRIEVANCES REGISTRATION</h3>
                                <h3 class="register-heading"></h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name *" value="" required/>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <input type="number" name="phone" class="form-control" placeholder="Phone num *" value="" required />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="branch" required>
                                                <option class="hidden" value="" selected disabled>Select Branch</option>
                                                <option>Computer Engineering</option>
                                                <option>Civil Engineering</option>
                                                <option>Mechanical Engineering</option>
                                                <option>Electrical Engineering</option>
                                                <option>Electronics Engineering</option>
                                            </select>
                                        </div>
                                        <a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Message-></b><span class="badge">          Message-></span></a><br>
                                            
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                            <select class="form-control" name="type" required>
                                                <option class="hidden" value="" selected disabled>Grievance Type?</option>
                                                
                                                <option>Grievance Related to Admission</option>
                                                <option>Grievance Related to Victimization</option>
                                                <option>Grievance Related to Attendance</option>
                                                <option>Grievance Related to Charging of fees</option>
                                                <option>Non-transparent or unfair evalution process</option>
                                                <option>Non-Observation of AICTE norms</option>
                                                <option>Refusal to return documents</option>
                                                <option>Harassment by students or teachers</option>
                                                <option>Student amenities and quality education</option>
                                                <option>Non-payment or Delay in payment of scholarships</option>
                                                <option>SC/ST/Minority Women/Disabled discrimination</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="by" required>
                                                <option class="hidden" value="" selected disabled>Registered by  *</option>
                                                <option>Student</option>
                                                <option>Parent</option>
                                                <option>Staff</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="semester" required>
                                                <option class="hidden" value=""  selected disabled>Semester  *</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="bot" placeholder="Prove not a robot(2+3=)" value="" />
                                        </div>
                                          <textarea class="form-control" name="message" placeholder="Enter message  *" required>
                                          </textarea>                                       
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                        <input type="button" onclick="cancel()" class="btnRegister"  value="cancel"/>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
          </div>
          </body>       
</form>
</html>