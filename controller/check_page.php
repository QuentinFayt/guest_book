<?php 
$page = "homepage";
if(isset($_SESSION["IdSession"]) && $_SESSION["IdSession"] == session_id()){
    $whiteList = ["homepage", "form","admin","logout"];
}else{
    $whiteList = ["homepage", "form","login"];
}
if (isset($_GET['idpage']) && in_array($_GET['idpage'], $whiteList)) {
    $page = strip_tags(trim($_GET['idpage']));
}