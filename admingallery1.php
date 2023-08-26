<?php
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: mainpage.php");
  exit();
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
    document.forms['cform'].action='adminmainpage.php';
    document.forms['cform'].submit();
}
function add()
{
    document.forms['cform'].action='functions/addimage.php';
    document.forms['cform'].submit();
}
</script>
<style>
    body{
    font-family: 'Times New Roman';
    background-color: #ccf5f7;
}
.gallery{
    margin: 10px 50px;
}
.gallery img{
    text-align: center;
    width: 330px;
    height: 270px;
    padding: 15px;

}
.gallery img:hover{
    filter: grayscale(0);
    transform: scale(1.1);
}
.gallery .btn{
    position: absolute;
     transform: translate(-50%,-50%);
     width: 130px;
     height: 50px;
     text-align: center;
     line-height: 60px;
     color: #fff;
     font-size: 24px;
     text-transform: uppercase;
     text-decoration: none;
     font-family: 'Times New Roman';
     box-sizing: border-box;
     background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);  
     background-size: 400%;
     border-radius: 80px;
     z-index: 1;
}
button{
    position: fixed;
     top: 90%;
     left: 92%;
     transform: translate(-50%,-50%);
     width: 130px;
     height: 50px;
     text-align: center;
     line-height: 60px;
     color: #fff;
     font-size: 24px;
     text-transform: uppercase;
     text-decoration: none;
     font-family: 'Times New Roman';
     box-sizing: border-box;
     background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);  
     background-size: 400%;
     border-radius: 80px;
     z-index: 1;
}
.btnnew{
    position: fixed;
     top: 80%;
     left: 92%;
     transform: translate(-50%,-50%);
     width: 130px;
     height: 50px;
     text-align: center;
     line-height: 60px;
     color: #fff;
     font-size: 24px;
     text-transform: uppercase;
     text-decoration: none;
     font-family: 'Times New Roman';
     box-sizing: border-box;
     background: linear-gradient(90deg,#ecbc1e,#f53d0f,#f30404,#f4035f);  
     background-size: 400%;
     border-radius: 80px;
     z-index: 1;
}
.btnnew:hover{
        animation: animate 8s linear infinite;
    }
    @keyframes animate{
        0%{
            background-position: 0%;
        }
        100%{
            background-position: 400%;
        }
    }
    .btnnew:before{
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        z-index: -1;
        background: linear-gradient(90deg,#ecbc1e,#f53d0f,#f30404,#f4035f);  
        background-size: 400%;
        border-radius: 40px;
        opacity: 0;
        transition: 0.5s;
    }
    .btnnew:hover:before{
        filter: blur(20px);
        opacity: 1;
        animation: animate 8s linear infinite;
    }
</style>
    </head>
    <body>
        <form name="cform"><button onclick="cancel()" type="button" class="btn btn-danger">Back</button>
            <button class="btnnew" onclick="add()" type="button" class="btn btn-danger">+image+</button><form>
</h1>
        <hr>
        <div class="gallery" align="center">
            <?php
            $mysql=new mysqli('localhost','root','','college_website');
            $sql="SELECT * FROM `gallery` WHERE `Status`='active'";
              $result=$mysql->query($sql);
              if ($result->num_rows > 0) 
              {
                while($row = $result->fetch_assoc()) {
 
?>
            <figure>
            <a href="images/imagegallery/<?php echo $row['Name'];?>"><img src="images/imagegallery/<?php echo $row['Name'];?>" alt="Gpc image"></a>     
            <figcaption><a class="btn" href="functions/deleteimage.php?id=<?php echo $row['Id'] ?>">Delete</a></figcaption>
            </figure>
            <?php
 }
}
            ?>
        </div>
    </body>
</html>
