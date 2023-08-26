
<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
?>
<?php
$_SESSION['message']='';
$connection=mysqli_connect('localhost','root','');
$db=mysqli_select_db($connection,'college_website');
if(isset($_POST['update']))
{
    $admin=$_SESSION['admin'];
    $uname=$_POST['username'];
    $password=$_POST['pass'];
    $newuser=$_POST['nuser'];
    $Newpass=$_POST['newpass'];
    $sql1="SELECT * FROM `admin` WHERE `NAME`='$admin'"; 
    $result=mysqli_query($connection,$sql1);
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) {
               $id=$row["ID"];
               $email=$row["Email"];
               $pass=$row["PASSWORD"];
            }
            if($email== $uname && $pass== $password )
              {
                if($_POST['newpass']==$_POST['cnewpass'])
                 {
                    $sql="UPDATE `admin` SET `Email`='$newuser',`PASSWORD`='$Newpass' WHERE `NAME`='$admin' && `ID`='$id'";
                    $result=mysqli_query($connection,$sql);
                  if ($result) 
                  {
                    $_SESSION['message']="Updated Successfully";
                   }       
                  else
                  {
                    $_SESSION['message']="Failed....!";
                  }   
                 }
                 else
                 {
                   $_SESSION['message']="Two passwords donot match!";
                 }  
             }
             else{
                $_SESSION['message']="Incorrect username or password!";
             }
        }


}  
?>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
function cancel()
{
    document.forms['preset'].action='adminmainpage.php';
    document.forms['preset'].submit();
}
</script>
</head>
<body>
<section style="background-color:#000066;">
    <div class="container">
	<div class="row">
		<div class="col-md-12">
		    <div class="card shadow">
		        <div class="card-body">
		            <div class="row">
		                <div class="col-md-12 ">
		                        <center><h4 style="color:blue;">Update To New Admin</h4></center>
		                        <hr>
                                <div class="form-group">
                                 <form name="preset" class="signup" action="" method="post">
                                 <div class="alert alert-error" style="color:red"><?=$_SESSION['message']?></div>
                                 <div class="form-group">
                                      <input type="email" class="form-control" name="username" placeholder="Username..* ">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" name="pass" placeholder="Password..* ">
                                    </div>
                                    <div class="form-group">
                                      <input type="email" class="form-control" name="nuser" placeholder="new username..email* ">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" name="newpass" placeholder="password...  *">
                                    </div>
                                    <div class="form-group">
                                      <input type="password" class="form-control" name="cnewpass" placeholder="Conferm  Password...  *">
                                    </div>
                                    <div class="form-group" align="right">
                                    <div>
                                    <input type="button"  onclick="cancel();" class="btn btn-success "  value="BACK">
                                    <input type="submit" class="btn btn-success " name="update"  value="CHANGE ADMIN">
                                    </div>
                                    </div>
                                  </form>                               
                                </div>                    
                            </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</div>
</section>
</body>
</html>