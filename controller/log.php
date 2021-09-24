<?php

$adminName = "admin";
$adminPassword = "admin";

if(isset($_POST["admin_pseudo"]) && isset($_POST["admin_mdp"])){
    if($adminName == $_POST["admin_pseudo"] && $adminPassword == $_POST["admin_mdp"]){
        $_SESSION["admin_pseudo"] = $_POST["admin_pseudo"];
        $_SESSION["admin_mdp"] = $_POST["admin_mdp"];
    }
    else{
        header('Location:index.php?idpage=login');
    }
}