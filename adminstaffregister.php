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
        $Department=$_POST['department'];
        $Qualification=$_POST['qualification'];
        $username=$_POST['username'];
        $Password= $_POST['password'];
         $sql="INSERT INTO `department_head` (`NAME`, `Email_ID`,`DEPARTMENT`, `DESIGNATION`,`QUALIFICATION`, `PASSWORD`)
          VALUES ('$Username', '$Email','$Department', '$Designation','$Qualification', '$Password')";
          $sql1="INSERT INTO `$Department` (`NAME`, `DESIGNATION`,`QUALIFICATION`)
          VALUES ('$Username', '$Designation','$Qualification')";
          if($mysql->query($sql)==true && $mysql->query($sql1)==true)
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
    <h1>Create an account</h1>
    <form class="form" action="adminstaffregister.php" name="form" method="post">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <input type="text" placeholder="User Name" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Qualification" name="qualification" required />
      <input type="text" placeholder="Designation" name="designation" required />
      <select class="form-control" name="department" required>
        <option class="hidden" value="" selected disabled>Select Branch</option>
        <option value="computer"> Computer Engineering</option>
        <option value="mechanical"> Mechanic Engineering </option>
        <option value="civil">Civil Engineering </option>
        <option value="electrical"> Electrical Engineering </option>
        <option value="electronics"> Electronics Engineering </option>
      </select>
      <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Back"  class="btn btn-block btn-primary" onclick="cancel();" />
    </form>
  </div>
</div>
</body>
</html>