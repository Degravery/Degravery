<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="login.css">
    <title>LOGIN</title>
</head>
<style>
    label{
        font-family: 'Times New Roman', Times, serif;
    }
    input{
        font-size: 20px;
        background-color: lightblue;
        border-style: solid;
        border-top: none;
        border-left: none;
        border-right: none;
        border-width: 2px;
        border-color: black;
        height: 25px;
        width: 250px;
        transition: 0.20s ease;
    }
    button{
        color:rgb(13, 35, 100);
        background-color: gold;
        font-size: 25px;
        width: 475px;
        height: 50px;
        border-radius: 5px;
        transition: 0.25s linear;
    }
    a{
        display:inline;
        color: gold;
        display: flex;
        padding-left: 5px;
        align-items: center;
        font-size: larger;
        text-decoration: none;
        border-radius: 5px;
        height: 30px;
        transition: 0.15s linear;
    }
    h1{
        color: rgb(13, 35, 100);
        font-size: 75px;
    }
    .logpos{
        position:absolute;
        left: 120px;
        top: 1px;
    }
    label{
        color: gold;
        font-size: 25px;
    }   
    
    @media screen and (max-width:1367px){
    .container{
        top: 50%;
        left:450px;
    }
    img{
    width: 100px;
    height: 100px;
    object-fit: contain;
    }   
}

@media screen and (max-width:550px){ 
body{
    height:115vh;
}
input{
        font-size: 20px;
        height: 25px;
        width: 245px;
     }
    h1{
        margin-top: 10px;
        font-size: 50px;
    }
    .container{
        top: 25%;
        left:10%;
        width: 390px;
        height: 400px;
        }
    .gridcontain{
        position: absolute;
        margin-left: 35px;
        width: 150px;
        height: 150px;
        bottom: 315px;
        right: 275px;
    }
    .navbpos{
        top: 325px;
        left: 110px;
    }
    .buttonpos{
        top: 325px;
        left: 35.5px;
    }
    .seperater1{
        width: 390px;
        height: 2px;
        top: 390px;
        left: 35px;
    }
    .ubox{
        width: 250px;
        left: 120px;
        top: 155px;
    }
    .pbox{
        width: 250px;
        left: 120px;
        top: 220px;
    }
    .errorpos{
        left: 165px;
        top:385px;
        width: 150px;
    }
    button{
        font-size: 25px;
        width: 390px;
        height: 50px;
        }
    a{
        padding-left: 5px;
        border-radius: 5px;
        height: 30px;
        }
    .logindeco{
        width: 390px;
        height: 75px;
        border-radius: 10px;
        }
        }
</style>
<body>
    <div class="imgpos">
    <img src="images/degravery.png" alt="logo"></div>
    <form action="login.php" method="post">
        <div class="background">
        <div class="container">
        <a href="index.php" style="position:absolute;width:150px;height:20px;bottom:5px;left:5px">Log in as guest</a>
        <div class="logindeco">
        <h1 class="logpos">LOGIN</h1></div>
        <div class="gridcontain">
        <div class="ubox">
        <label>User Name: </label>
        <input type="text", name="aname", placeholder="Enter your Username"></div>
        <div class="pbox">
        <label><br>Password: </label>
        <input type="password", name="pass", placeholder="Enter your Password"></div>
        <div class="buttonpos">
        <button type="submit">Login</button></div>
        <div class ="errorpos"><h3><?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php }else if (isset($_GET['Sign_up'])){?><p class="error"><?php echo $_GET['Sign_up'];}?></h3></div>
        <div class="seperater1"></div>
            </div>
            <div class="navbpos">
            <nav><a href="register.php">Don't have an account?</a></nav></div>
        </div> 
        </div>   
    </form>
</body>
</html>