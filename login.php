<?php
session_start();
include "Database_connect.php";
if (isset($_POST['aname']) && isset($_POST['pass'])){
    function accept($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $aname = accept($_POST['aname']);
    $pass = accept($_POST['pass']);
    
    if (empty($aname)){
        header("Location: loginmenu.php?error=name is required");
    exit();
    }else if (empty($pass)){
        header("Location: loginmenu.php?error=password is required");
    exit();
    }else{
        $sql = "SELECT * FROM user WHERE Uname='$aname' AND Password='$pass'";
        
        $result = mysqli_query($connect, $sql);

        if(mysqli_num_rows($result)===1){
                $row = mysqli_fetch_assoc($result);
                if ($row['Uname']===$aname && $row['Password']===$pass){
                    $_SESSION['Uname'] = $row['Uname'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: index.php");
                    exit();
                }else{
                  header("Location: loginmenu.php?error=name and/or password is wrong");
                  exit();
                }
            }else{
            header("Location: loginmenu.php?error=name and/or password is wrong");
         exit();
        }
    }
}else{
    header("Location: loginmenu.php?error");
    exit();
}






?>