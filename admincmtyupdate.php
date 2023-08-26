<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
}
?>
<?php
include_once "dbactions.php";
$_SESSION['message']='';
$id=$_GET['id'];
$cname=$_SESSION['cname'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>cedit</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script>
function cancel()
{
    document.forms['replayform'].action='admincmtyedit.php';
    document.forms['replayform'].submit();
}
</script>
<?php
if(isset($_POST['update']))
{
    $name=$_POST['name'];
    $address=$_POST['address'];
    $designation=$_POST['des'];
    $query="UPDATE `$cname` SET `NAME`='$name',`ADDRESS`='$address',`DESIGNATION`='$designation' where `SLNO`='$id'";
    if(setData($query))
    {
        $_SESSION['message']="Updated Successfully"; 
        header("Location: admincmtyedit.php");  
    }
    else{
        $_SESSION['message']="Updation Failed....!";
    }
}
else if(isset($_POST['delete']))
{
    $query="UPDATE `$cname` SET `Now`='notactive' where `SLNO`='$id'";
    if(setData($query))
    {
        $_SESSION['message']="User deleted";
        header("Location: admincmtyedit.php");   
    }
    else{
        $_SESSION['message']="Deletion Failed....!";
    }
}
?>
</head>
<body>
    <?php
     $_SESSION['message']='';
        $mysql=new mysqli('localhost','root','','college_website');
        $sql="SELECT * FROM `$cname` WHERE SLNO='$id'";
          $result=$mysql->query($sql);
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) {
               $_SESSION['memname']=$row["NAME"];
               $_SESSION['address']=$row["ADDRESS"];
               $_SESSION['des']=$row["DESIGNATION"];
            }    
          } 
    ?>


    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Update or Delete Details Of <?php echo $_SESSION['memname'];?></h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="" name="replayform">
                    
                        <div class="form-row">
                            <div class="name">name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="<?php echo $_SESSION['memname'];?>" name="name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" value="<?php echo $_SESSION['address'];?>" name="address" placeholder="address">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Designation</div>
                            <div class="value">
                                <div class="input-group">
                                <input class="input--style-6" type="text" name="des" value="<?php echo $_SESSION['des'];?>" placeholder="designation">
                                </div>
                            </div>      
                </div>
                <div class="alert alert-error" style="color:red"><?=$_SESSION['message']?></div>
                <div class="card-footer">
                <input class="btn btn--radius-1 btn--blue-2" type="submit" class="btnRegister" name="update"  value="Update"/>                  
                <br><br>
                <input class="btn btn--radius-1 btn--blue-2" type="submit" class="btnRegister" name="delete"  value="Delete"/>                  
                <br><br>
                <input class="btn btn--radius-2 btn--blue-2" type="button" class="btnRegister" onclick="cancel()"  value="Back"/>                  
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->