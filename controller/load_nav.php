<?php

if(isset($_SESSION["IdSession"]) && $_SESSION["IdSession"] == session_id()){
    include("../view/private/nav.php");
}else{
    include("../view/public/nav.php");
}