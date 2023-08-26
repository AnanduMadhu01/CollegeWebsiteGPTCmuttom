<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location: mainpage.php");
  exit();
}
?>
<?php
include_once "dbactions.php";
$_SESSION['message']='';

$dept= $_SESSION['department'];

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
if(isset($_POST['update']))
{
    
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $qualification=$_POST['qualification'];
    $query="UPDATE `$dept` SET `NAME`='$name',`DESIGNATION`='$designation',`QUALIFICATION`='$qualification' where `ID`='$id'";
    if(setData($query))
    {
        $_SESSION['message']="Updated Successfully";   
    }
    else{
        $_SESSION['message']="Updation Failed....!";
    }
}
else if(isset($_POST['delete']))
{
    $id=$_SESSION['id'];
    $query="UPDATE `$dept` SET `Now`='notactive' where `ID`='$id'";
    if(setData($query))
    {
        $_SESSION['message']="User deleted";   
    }
    else{
        $_SESSION['message']="Deletion Failed....!";
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
    <form class="form" action="staffedit.php" method="post" name="rform">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <select class="form-control" name="sname">
        <option class="hidden" value="" selected disabled>Select name</option>
        <?php
           $result = getData("select * from $dept");
           if ($result->num_rows > 0) 
           {
               while($row = $result->fetch_assoc()) {
        ?>
        <option><?php echo $row["NAME"];?></option>
        <?php
            }
        }
        ?>    
      </select>
      <input type="submit" value="GO" name="go" class="btn btn-block btn-primary" />
      
      <?php
        if(isset($_POST['go']))
        {
            if(isset($_POST['sname'])=="")
            {
                $_SESSION['message']="Select name....!";    
            }
            else
            {
           $name=$_POST['sname'];
           $sql="SELECT * FROM `$dept` WHERE `NAME`='$name'";
           $result = getData($sql);
           
           if ($result->num_rows > 0) 
           {
               
               while($row = $result->fetch_assoc()) 
               {
                $_SESSION['id']=$row['ID'];
                ?>
                    <input type="text" placeholder="Name" name="name" value="<?php echo $row['NAME']; ?>" />
                    <input type="text" placeholder="Designation" name="designation" value="<?php echo $row['DESIGNATION']; ?>" />
                    <input type="text" placeholder="Qualification" name="qualification" value="<?php echo $row['QUALIFICATION']; ?>" />     
                    <input type="submit" value="UPDATE" name="update" class="btn btn-block btn-primary"  />
                    <input type="submit" value="DELETE" name="delete" class="btn btn-block btn-primary" />
                    
                <?php 
                }
            }
        }
    }
        else{
            $_SESSION['message']="Failed....!";
        }    
         ?>  
         <input type="button" value="Cancel" onclick="cancel();" class="btn btn-block btn-primary" />  
    </form>
  </div>
</div>
</body>
</html>