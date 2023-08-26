<?php
include_once "../dbactions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registeared List</title>
    </head> 
    <style>
         body{
             background:url("images/alumni6.jpeg")no-repeat ;
             background-size: cover;
         }
         th{
            width: 80%;
             margin: auto;
             border: 1px solid white;
             border-collapse: collapse;
             text-align: center;
             font-size: 30px;
             table-layout: fixed;
             background: rgb(3, 3, 110);
             opacity: 0.9;
             color: white;
             margin-top: 100px;

         }
         table, td{
             width: 80%;
             margin: auto;
             border: 1px solid darkblue;
             border-collapse: collapse;
             text-align: center;
             font-size: 30px;
             table-layout: fixed;
             background: white;
             opacity: 0.7;
             color: Black;
             margin-top: 100px;

         }
         th, td{
             padding: 5px;
             color: solid white;
         }
         a{
         margin-right: 150px;    
         float:right;
         width: 200px;
         height: 60px;
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
         border-radius: 30px;
         z-index: 1;

         }
         h1{
            font-size: 40px;
            color: rgb(5, 236, 82);

         }
    </style>
    <body>
        <h1 class="text-left" align="center">Government Polytechnic College Muttom,Alumni Registered List</h1>
    <?php
    $sql="select * from `alumni_registration` ORDER BY `YearOfPass` DESC";
    $result = getData($sql);
    if ($result->num_rows < 1) 
    {
        ?>
        <table  align="center">
        <tr>
        <th align="center" colspan="3" style="background-color:lightblue;color:black;"><h3><div align="center">No Registrations Found</h3></div></th>
        </tr>
        <?php
    }
    else if ($result->num_rows > 0) 
    {
      
?>
<table>
<tr style="background-color:#32A9EE;color:white;">
<th>Name</th>
<th>Year Of Pass</th>
<th>Branch</th>

</tr>
<?php
  while($row = $result->fetch_assoc())
  {
    ?>
<tr>
      <td><?php echo $row["Name"];?></td>
      <td><?php echo $row["YearOfPass"];?></td>
      <td><?php echo $row["Branch"];?></td>


</tr>
      <?php 
      }
    } 
?>
</table>
        <br>
        <a href="alumni.php" align="center">Back</a>  
    </body>       
</html>
