<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>REGISTER</title>
</head>
<style>
    label{
        font-size: large;
        color: gold;
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
        font-size: 25px;
        background-color: gold;
        color: #0d2364;
        width: 475px;
        height: 50px;
        border-radius: 5px;
        transition: 0.25s linear;
    }
    a{
        color: #0d2364;
        display: flex;
        text-align: center;
        padding-left: 15px;
        font-size: larger;
        text-decoration: none;
        border-radius: 5px;
        background-color: gold;
        width: 80px;
        height: 25px;
        transition: 0.15s linear;
    }
    h1{
        color: gold;
        font-size: 65px;
    }
    label{
        font-size: 20px;
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

</style>
<body>
    <form action="register_db.php" method="post">
        <div class="container">
            <div class="gridcontain">
        <h1>REGISTER</h1>
        <div class="seperater1"></div>
        <div class="ubox">
        <label>User name: </label>
        <input type="text", name="aname", placeholder="Enter your Username"></div>
        <div class="nbox">
        <label><br> name: </label>
        <input type="text", name="pname", placeholder="Enter your Name"></div>
        <div class="pbox">
        <label><br>Password: </label>
        <input type="password", name="pass", placeholder="Enter your Password"></div>
        <div class="buttonpos">
        <label class="male">Male</label>
        <div class="radiopos1"><input type="radio", name="sex" value="MALE" checked></p></div>
        <label class="female">Female</label>
        <div class="radiopos2"><input type="radio", name="sex" value="FEMALE"></div>
        <button type="submit">Register</button></div>
        <div class ="errorpos"><h3><?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?></h3></div>
        <div class="navbpos">
        <nav><a href="loginmenu.php">Go back</a></nav></div>
            </div>
        </div>
    </form>
</body>
</html>