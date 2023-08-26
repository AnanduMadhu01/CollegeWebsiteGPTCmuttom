<?php
session_start();
if(isset($_SESSION['admin']))
{
  
?>
<?php
$id=$_GET['id'];
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
    <title>GPTC Muttom Grievance replay</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script>
function cancel()
{
    document.forms['replayform'].action='greplay.php';
    document.forms['replayform'].submit();
}
</script>
</head>
<body>
    <?php
     
     $_SESSION['message']='';
        $mysql=new mysqli('localhost','root','','college_website');
        $sql="SELECT * FROM `geievance_register` WHERE ID='$id'";
          $result=$mysql->query($sql);
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) {
               $_SESSION['name']=$row["Name"];
               $_SESSION['type']=$row["Type"];
               $_SESSION['msg']=$row["Message"];
            }
              
          } 
          else
          {
            $_SESSION['message']="no result found.....!";
          }
    ?>

<?php
$connection=mysqli_connect('localhost','root','');
$db=mysqli_select_db($connection,'college_website');
if(isset($_POST['update']))
{
        $Replay=$_POST['replay'];
                $sql="UPDATE `geievance_register` SET `Replay`= '$Replay',`status`='replyed' WHERE `ID`='$id'";
                  $result=mysqli_query($connection,$sql);
                if ($result) 
                {
                  $_SESSION['message']="Replayed Successfully";
      
                  echo"<script>alert('Replayed Successfully');</script>";
                  header('Location:greplay.php');
                 }       
                else
                {
                  $_SESSION['message']="Failed....!";
                }    
    }
  
?>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Grievance Reply</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="" name="replayform">
                    <div class="alert alert-error" style="color:red"><?=$_SESSION['message']?></div>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="<?php echo $_SESSION['name'];?>" name="full_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" value="<?php echo $_SESSION['type'];?>" placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" placeholder="Message received"><?php echo $_SESSION['msg'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Reply</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="replay" placeholder="Enter Reply To the Received message " required></textarea>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer">
                <input class="btn btn--radius-1 btn--blue-2" type="submit" class="btnRegister" name="update"  value="Sent Replay"/>                  
                <br><br>
                <input class="btn btn--radius-2 btn--blue-2" type="button" class="btnRegister" onclick="cancel()"  value="Cancel"/>                  
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
<?php
}
else if(isset($_SESSION['cmmtyname']))
{
 ?>  
    
    <?php
$id=$_GET['id'];
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
    <title>GPTC Muttom Grievance replay</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <script>
function cancel()
{
    document.forms['replayform'].action='greplay.php';
    document.forms['replayform'].submit();
}
</script>
</head>
<body>
    <?php
     
     $_SESSION['message']='';
        $mysql=new mysqli('localhost','root','','college_website');
        $sql="SELECT * FROM `geievance_register` WHERE ID='$id'";
          $result=$mysql->query($sql);
          if ($result->num_rows > 0) 
          {
            while($row = $result->fetch_assoc()) {
               $_SESSION['name']=$row["Name"];
               $_SESSION['type']=$row["Type"];
               $_SESSION['msg']=$row["Message"];
            }
              
          } 
          else
          {
            $_SESSION['message']="no result found.....!";
          }
    ?>

<?php
$connection=mysqli_connect('localhost','root','');
$db=mysqli_select_db($connection,'college_website');
if(isset($_POST['update']))
{
        $Replay=$_POST['replay'];
                $sql="UPDATE `geievance_register` SET `Replay`= '$Replay',`status`='relpyed' WHERE `ID`='$id'";

                  $result=mysqli_query($connection,$sql);
                if ($result) 
                {
                  $_SESSION['message']="Replayed Successfully";
                  //header('Location:greplay.php');
                 }       
                else
                {
                  $_SESSION['message']="Failed....!";
                }    
    }
  
?>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Grievance Reply</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="" name="replayform">
                    <div class="alert alert-error" style="color:red"><?=$_SESSION['message']?></div>
                        <div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" value="<?php echo $_SESSION['name'];?>" name="full_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Type</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="text" value="<?php echo $_SESSION['type'];?>" placeholder="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Message</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" placeholder="Message received"><?php echo $_SESSION['msg'];?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Reply</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-6" name="replay" placeholder="Enter Reply To the Received message " required></textarea>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="card-footer">
                <input class="btn btn--radius-1 btn--blue-2" type="submit" class="btnRegister" name="update"  value="Sent Replay"/>                  
                <br><br>
                <input class="btn btn--radius-2 btn--blue-2" type="button" class="btnRegister" onclick="cancel()"  value="Cancel"/>                  
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



   <?php 
}
else{
    header("Location: mainpage.php");
    exit();
}
?>