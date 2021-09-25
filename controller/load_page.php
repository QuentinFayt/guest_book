<?php

if ($page === "homepage") {
    include("../view/public/homepage.php");
} elseif ($page === "form") {
    include("../view/public/form.php");
}

if(isset($_SESSION["IdSession"]) && $_SESSION["IdSession"] == session_id()){
    if ($page === "admin"){
        include("../view/private/editing.php");
    }        
    include("../view/private/logout_button.php");
    require("logout.php");
}else{
    if ($page === "login"){
        include("../view/public/login.php");
    }
}