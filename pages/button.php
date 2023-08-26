<!DOCTYPE html>
<html>
<head>
<style>
    a {
     position: absolute;
     top: 75%;
     left: 50%;
     transform: translate(-50%,-50%);
     width: 300px;
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
    a:hover{
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
    a:before{
        content: '';
        position: absolute;
        top: -5px;
        left: -5px;
        right: -5px;
        bottom: -5px;
        z-index: -1;
        background: linear-gradient(90deg,#03a9f4,#f441a5,#ffeb3b,#03a9f4);  
        background-size: 400%;
        border-radius: 40px;
        opacity: 0;
        transition: 0.5s;
    }
    a:hover:before{
        filter: blur(20px);
        opacity: 1;
        animation: animate 8s linear infinite;
    }

</style>
</head>
<body>
        <a  href="alumnilist.php">Registered list</a><br>
    
</body>
</html>