

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
<style>
/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('images/demo/login.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5)  !important;
}
.card-header h3{
color: black;
}
.input-group-prepend span{
width: 50px;
background-color: blue;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color:blue;
width: 100px;
}
.cancel_btn{
color: black;
background-color:red;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: #33ffff;
}
.cancel_btn:hover{
color: black;
background-color: #ff9999;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>   
<script>
function cancel()
{
    document.forms['loginform'].action='mainpage.php';
    document.forms['loginform'].submit();
}
</script>
<?php
session_start();
$_SESSION['message']='';
$mysql=new mysqli('localhost','root','','college_website');

if($_SERVER['REQUEST_METHOD']=='POST')
{
        $Username=$_POST['username'];
        $Password= $_POST['password'];
         $sql="SELECT * FROM `department_head` WHERE Email_ID='$Username' && PASSWORD='$Password'";
          $result=$mysql->query($sql);
          if ($result->num_rows > 0) 
          {
			while($row = $result->fetch_assoc()) {
				$_SESSION['department']= $row["DEPARTMENT"];
					}
			if(isset($_SESSION['username'])){
				$url="staffmainpage.php";
				header('Location:' .$url);
				exit();	
				
			}
			else if(isset($_POST['username'])){
				$username=$_POST['username'];
				$_SESSION['username'] = $username;
				$url="staffmainpage.php";
				header('Location:' .$url);
				exit();
			}
          } 
          else
          {
            $_SESSION['message']="Incorrect Username or password!";
          }
}
?>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3 align="center" style="color:white">STAFF LOGIN	!</h3>
			</div>
			<div class="card-body">
				<form name="loginform" method="POST" action="">
				<div class="alert alert-error" style="color:red"><?=$_SESSION['message']?></div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" name="username" placeholder="username" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="password" placeholder="password" required>
                    </div>
					<div class="form-group">
						<input type="button" name="btncancal" value="Cancel"  class="btn float-left cancel_btn" onclick=cancel()>
                    </div>
                    <div class="form-group" >
						<input type="submit" value="Login" class="btn float-right login_btn">
                    </div>
                    
				</form>
		</div>
	</div>
</div>
</body>
</html>