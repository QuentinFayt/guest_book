<?php

if(isset($_SESSION["admin_pseudo"]) && isset($_SESSION["admin_mdp"])){
    include("../view/private/nav.php");
}else{
    include("../view/public/nav.php");
}