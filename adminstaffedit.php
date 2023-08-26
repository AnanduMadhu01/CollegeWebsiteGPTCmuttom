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
?>
<html>
<head>
<script>
function cancel()  
{
    document.forms['rform'].action='adminmainpage.php';
    document.forms['rform'].submit();
}
</script>
<?php
if(isset($_POST['update']))
{
    $department=$_SESSION['dpt'];
    $id=$_SESSION['id'];
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $qualification=$_POST['qualification'];
    $query="UPDATE `$department` SET `NAME`='$name',`DESIGNATION`='$designation',`QUALIFICATION`='$qualification' where `ID`='$id'";
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
    $department=$_SESSION['dpt'];
    $query="UPDATE `$department` SET `Now`='notactive' where `ID`='$id'";
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
    <h1>Edit Staff</h1>
    <form class="form" action="adminstaffedit.php" method="post" name="rform">
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <select class="form-control" name="department">
        <option class="hidden" value="" selected disabled>Select Branch</option>
        <option>computer </option>
        <option>civil </option>
        <option>mechanical </option>
        <option>electrical </option>
        <option>electronics </option>
      </select>
      <input type="submit" value="GET DETAILS" name="get" class="btn btn-block btn-primary" />
      <?php
      if(isset($_POST['get']))
      {
        if(isset($_POST['department'])=="")
            {
              $_SESSION['message']="Select department....!";   
            }
            else
            {
          $dept=$_POST['department'];
          $_SESSION['dpt']=$_POST['department'];
       ?>   
      <select class="form-control" name="sname">
        <option class="hidden" value="" selected disabled>Select name</option>
        <?php
        $branch=$_POST['department'];
           $result = getData("select * from $branch");
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
    }
  }
    ?>
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
           $dpt=$_SESSION['dpt'];
           $sql="SELECT * FROM `$dpt` WHERE `NAME`='$name' && `Now`='active'";
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
         <input type="button" value="CANCEL" onclick="cancel();" class="btn btn-block btn-primary" />  
    </form>
  </div>
</div>
</body>
</html>
