<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
?>
<html>
<head>
<script>
function cancel()
{
    document.forms['form'].action='adminmainpage.php';
    document.forms['form'].submit();
}
</script>
<?php
$_SESSION['message']='';
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if($_POST['password']==$_POST['confirmpassword'])
    {

        $Username=$_POST['username'];
        $Email=$_POST['email'];
        $Designation=$_POST['designation'];
        $Cname=$_POST['cmtyname'];
        $Password= $_POST['password'];
         $sql="INSERT INTO `committee_login` (`NAME`, `COMMITTEE_NAME`,`DESIGNATION`,`EMAIL`, `PASSWORD`)
          VALUES ('$Username','$Cname', '$Designation', '$Email', '$Password')";
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
    else
    {
        $_SESSION['message']="Two passwords donot match!";
    }

}
?>

</head>
<body>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="layout/styles/registration.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Register Committee Admin</h1>
    <form class="form" action="addgvnccmtyadmin.php" name="form" method="post">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <select class="form-control" name="cmtyname" required>
        <option class="hidden" value="" selected disabled>Select committee name</option>
        <option>grievance </option>
      </select>
      
      <input type="text" placeholder="Designation" name="designation" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Back"  class="btn btn-block btn-primary" onclick="cancel();" />
    </form>
  </div>
</div>
</body>
</html>