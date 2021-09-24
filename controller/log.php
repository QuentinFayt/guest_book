<?php

if(isset($_POST["admin_pseudo"]) && isset($_POST["admin_mdp"])){
    $adminTestN =  htmlspecialchars(strip_tags(trim($_POST["admin_pseudo"])),ENT_QUOTES);
    $adminTestP =  htmlspecialchars(strip_tags(trim($_POST["admin_mdp"])),ENT_QUOTES);
    
    if(mysqli_fetch_row(mysqli_query($connectToDB,"SELECT count(*) FROM admin WHERE admin_pseudo = '$adminTestN' AND admin_mdp = '$adminTestP'"))){
        $_SESSION["admin_pseudo"] = $_POST["admin_pseudo"];
        $_SESSION["admin_mdp"] = $_POST["admin_mdp"];
    }
    else{
        header('Location:index.php?idpage=login');
    }
}