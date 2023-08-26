<?php
session_start();
if(isset($_SESSION['department']))
{
  include_once "staffheader.php"; 
}
else if(isset($_SESSION['admin']))
{
  include_once "adminheader.php";
}
else{
include_once "header.php";
}
?>



<!DOCTYPE html>
<html>
    <head>
        <title>GPTC Muttom Gallery</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
function cancel()
{
    document.forms['cform'].action='gallery1.php';
    document.forms['cform'].submit();
}
</script>
<style>
    body{
    font-family: "Open Sans", "Arial", "Helvetica Neue", sans-serif;
    font-family: 'Times New Roman';
    background-color: #ccf5f7;
}
.gallery{
    margin: 10px 10px;
}
.gallery img{
    width: 240px;
    height: 180px;
    padding: 10px;
    filter: grayscale(50%);
}
.gallery img:hover{
    filter: grayscale(0);
    transform: scale(1.1);
}
</style>
    </head>
    <body>
</h1>
        <hr>
        <div class="gallery">
            <?php
            $mysql=new mysqli('localhost','root','','college_website');
            $sql="SELECT * FROM `gallery` WHERE `Status`='active'";
              $result=$mysql->query($sql);
              if ($result->num_rows > 0) 
              {
                while($row = $result->fetch_assoc()) {
 
?>
            <a href="images/imagegallery/<?php echo $row['Name'];?>"><img src="images/imagegallery/<?php echo $row['Name'];?>" alt="Gpc image"></a>     
            <?php
 }
}
            ?>
        </div>
    </body>
</html>
