<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: mainpage.php");
  exit();
}
?>
<html>
<head>
<script>
function cancel()
{
    document.forms['rform'].action='staffmainpage.php';
    document.forms['rform'].submit();
}
</script>
<?php
$_SESSION['message']='';
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
        $department=$_SESSION['department'];
        $Username=$_POST['username'];
        $Designation=$_POST['designation'];
        $Qualification=$_POST['qualification'];
         $sql="INSERT INTO `$department` (`NAME`, `DESIGNATION`,`QUALIFICATION`)
          VALUES ('$Username', '$Designation','$Qualification')";

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
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="registration.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Create an account</h1>
    <form class="form" action="staffregistration.php" method="post" name="rform">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <input type="text" placeholder="Full Name" name="username" required />
      <input type="text" placeholder="Designation" name="designation" required />
      <input type="text" placeholder="Qualification" name="qualification" required />     
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Cancel" onclick="cancel();" class="btn btn-block btn-primary" />
      <?php
        if(isset($_POST['cancel'])){
        header("Location: staffmainpage.php");
        exit();
        }
      ?>
    </form>
  </div>
</div>
</body>
</html>