<html>
<head>
<script>
function cancel()
{
    document.forms['frm'].action='../adminmainpage.php';
    document.forms['frm'].submit();
}
</script>
<?php
session_start();
$_SESSION['message']='';
$connection=mysqli_connect('localhost','root','');
$db=mysqli_select_db($connection,'college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(isset($_POST['upload']))
  {
    $allow=array('pdf');
    $temp=explode(".",$_FILES["pdf_file"]["name"]);
    $extenction=end($temp);
    $upload_file=$_FILES["pdf_file"]["name"];
    move_uploaded_file($_FILES["pdf_file"]["tmp_name"], "uploads/pdf/".$_FILES["pdf_file"]["name"]);
    $sql="UPDATE `mandatory_disclosure` SET `pdf`= '$upload_file'";
     $result=mysqli_query($connection,$sql);
          if ($result)
          {
              $_SESSION['message']="successfully uploaded!";
             // header("location:header.php");
          }
          else
          {
            $_SESSION['message']="Upload Failed!";
          }
   }        
}

?>
</head>
<body>
<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="../registration.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Upload Mandatory Disclosure Pdf File</h1>
    <form name="frm" method="post" enctype="multipart/form-data" >
      <div class="alert alert-error"><?=$_SESSION['message']?></div>
      <div class="avatar"><label>Select Your File:</label><input type="file" name="pdf_file" accept="application/pdf" required /></div>
      <input type="submit" value="Upload" name="upload" class="btn btn-block btn-primary" />
      <input type="button" name="btncancal" value="Home"  class="btn btn-block btn-primary" onclick=cancel()>
    </form>
  </div>
</div>
</body>
</html>