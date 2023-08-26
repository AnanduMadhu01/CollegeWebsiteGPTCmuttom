<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html>
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
    document.forms['gcheck'].action='../mainpage.php';
    document.forms['gcheck'].submit();
}
</script>
<?php
session_start();
$_SESSION['message']='';
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
        $Phone=$_POST['number'];
         $sql="SELECT * FROM `geievance_register` WHERE Phone='$Phone'";
          $result=$mysql->query($sql);
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) {
               $_SESSION['message']=$row["Replay"];
               $message=$row['Message'];
            }
              
          } 
          else
          {
            $message="Try With Your registeared mobile number.";  
            $_SESSION['message']="no result found.....!";
          }
}
?>
</head>
<body>
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>Enter your Registeared mobile number and get the solutions if provided...!</p>
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="grievance.php" role="tab" aria-controls="home" aria-selected="true">New</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="gstatus.php" role="tab" aria-controls="profile" aria-selected="false">Check status</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">GOVERNMENT POLYTECHNIC COLLEGE MUTTOM GRIEVANCES STATUS</h3>
                                <form action="" method="post" name="gcheck">
                                <div class="row register-form">
                                <?php
                                if(isset($_POST['check']))
                                {
                                 
                                    ?>
                                      <input type="label" class="form-control" value="<?php echo $message?>" placeholder="Enter your phone number" name="msg"/>
                                    <?php
                                    
                                }
                                ?>
                                          <div class="alert alert-error" style="color:red"><?=$_SESSION['message']?></div>
                                          <input type="number" class="form-control" placeholder="Enter your phone number" name="number" required/>
                                          <input type="submit" class="btnRegister" name="check"  value="check"/> 
                                          <input type="button" onclick="cancel()" class="btnRegister"  value="cancel"/>                                   
                                </div>
                                
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</body>
</html>