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
    document.forms['frm'].action='../admingallery1.php';
    document.forms['frm'].submit();
}
</script>
<?php
$_SESSION['message']='';
$conn=mysqli_connect('localhost','root','','college_website');
  if(isset($_POST['upload']))
  {
    $temp=explode(".",$_FILES["image"]["name"]);
    $extenction=end($temp);
    $upload_file=$_FILES["image"]["name"];
    move_uploaded_file($_FILES["image"]["tmp_name"], "../images/imagegallery/".$_FILES["image"]["name"]);
    $sql="INSERT INTO `gallery`(`Name`) VALUES ('$upload_file')";
    $result=mysqli_query($conn,$sql);
          if ($result)
          {
           
              $_SESSION['message']="successfully uploaded!";

          }
          else
          {
            $_SESSION['message']="Upload Failed!";
          }
   }        


?>

</head>
<body>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../registration.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Upload Image</h1>
    <form name="frm" method="post" enctype="multipart/form-data" >
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <div class="avatar"><label>Select Your image:</label><input type="file" name="image" required /></div>
      <input type="submit" value="Upload" name="upload" class="btn btn-block btn-primary" />
      <input type="button" name="btncancal" value="Back"  class="btn btn-block btn-primary" onclick=cancel()>
    </form>
  </div>
</div>
</body>
</html>