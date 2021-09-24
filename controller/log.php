<?php

if(isset($_POST["admin_pseudo"]) && isset($_POST["admin_mdp"])){
    $userNameLogin =  htmlspecialchars(strip_tags(trim($_POST["admin_pseudo"])),ENT_QUOTES);
    $userPasswordLogin =  htmlspecialchars(strip_tags(trim($_POST["admin_mdp"])),ENT_QUOTES);
    if(mysqli_fetch_row(mysqli_query($connectToDB,"SELECT count(*) FROM admin WHERE admin_pseudo = '$userNameLogin'"))[0]){
        if(password_verify($userPasswordLogin,mysqli_fetch_row(mysqli_query($connectToDB,"SELECT admin_mdp FROM admin WHERE admin_pseudo = '$userNameLogin'"))[0])){
            $_SESSION["admin_pseudo"] = $_POST["admin_pseudo"];
            $_SESSION["admin_mdp"] = $_POST["admin_mdp"];
        }
    }
    else{
        header('Location:index.php?idpage=login');
    }
}