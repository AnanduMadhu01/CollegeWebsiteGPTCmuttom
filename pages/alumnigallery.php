<!DOCTYPE html>
<html>
    <head>
        <title>Alumni Gallery</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script>
function cancel()
{
    document.forms['cform'].action='alumni.php';
    document.forms['cform'].submit();
}
</script>
<style>
    body{
    font-family: 'Times New Roman';
    background-color: #ccf5f7;
}
h1{
    text-align: center;
    color:darkred;
    margin: 30px 0 50px;

}

.gallery{
    margin: 10px 50px;
}
.gallery img{
    width: 230px;
    height: 170px;
    padding: 8px;
    filter: grayscale(100%);
}
.gallery img:hover{
    filter: grayscale(0);
    transform: scale(1.1);
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
</style>
    </head>
    <body>
        <h1>Government Polytechnic College Muttom Alumni Gallery
        <form name="cform"><button onclick="cancel()" type="button" class="btn btn-danger">Back</button><form>
</h1>
        <hr>
        <div class="gallery">
            <?php
            $mysql=new mysqli('localhost','root','','college_website');
            $sql="SELECT * FROM `alumni_gallery`";
              $result=$mysql->query($sql);
              if ($result->num_rows > 0) 
              {
                while($row = $result->fetch_assoc()) {
 
?>
            <a href="images/<?php echo $row['image'];?>"><img src="images/<?php echo $row['image'];?>" alt=""></a>     
            <?php
 }
}
            ?>
        </div>
    </body>
</html>