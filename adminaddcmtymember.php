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
    document.forms['rform'].action='admincmtyedit.php';
    document.forms['rform'].submit();
}
</script>
<?php
$_SESSION['message']='';
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
        $Cname=$_SESSION['cname'];
        $Name=$_POST['name'];
        $Address=$_POST['address'];
        $Designation=$_POST['designation'];
        
         $sql="INSERT INTO `$Cname` (`NAME`, `ADDRESS`,`DESIGNATION`)
          VALUES ('$Name', '$Address','$Designation')";

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
    <form class="form" action="adminaddcmtymember.php" method="post" name="rform">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <input type="text" placeholder="Full Name" name="name" required />
      <input type="text" placeholder="Address" name="address" required />
      <input type="text" placeholder="Designation" name="designation" required />     
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
      <input type="button" value="Back" onclick="cancel();" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>
</body>
</html>