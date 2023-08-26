<!DOCTYPE html>
<html>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .content{
            width: 450px;
            margin: 20px auto;
            box-shadow: 1px 1px 10px 2px #333;
            overflow: hidden;
            color: white;
        }
        .header{
            background: brown;
            color: white;
            padding: 15px 0px;
        }
        .moving-body{
            padding: 2px;
            height: 150px;
        }
        .m-par{
            text-align: center;
            padding: 20px;
        }
    </style>
    <body>
        <div class="content">
            
            <marquee behavior="scroll" direction="up" scrollamount="4" 
            onmouseover="this.setAttribute('scrollamount',0,0); this.stop()"
            onmouseout="this.setAttribute('scrollamount',4,0); this.start()"
            class="moving-body">
                <?php
                    $mysql=new mysqli('localhost','root','','college_website');
                    $sql="SELECT * FROM `alimninotification` WHERE `status`='active'";
               
                          $result=$mysql->query($sql);
                          if ($result->num_rows > 0) 
                          {
                            while($row = mysqli_fetch_array($result)) {
                                ?>
                                <div class="m-par">
                                    <?php
                                echo $row["notifications"];
                                echo "<br>";
                                ?>
                            </div>
                            <?php
                          }
                        } 
                ?>
                
            </marquee>
        </div>
    </body>
</html>