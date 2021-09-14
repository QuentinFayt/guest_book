<?php

$connectToDB = mysqli_connect("localhost", "root", "", "goldenbook", 3306);
mysqli_set_charset($connectToDB, "utf8");
/* Delete data from DB with button*/
if (isset($_POST["delete_id"])) {
    mysqli_query($connectToDB, "DELETE FROM messages WHERE id= '$_POST[delete_id]'");

    /*Reset primary key to last id number in DB
    $lastId = mysqli_fetch_all(mysqli_query($connectToDB, "SELECT id FROM messages ORDER BY id DESC LIMIT 1"), MYSQLI_ASSOC);
    $lastId = $lastId[0]["id"];
    mysqli_query($connectToDB, "ALTER TABLE messages AUTO_INCREMENT = $lastId"); */
}
/*Send new Data to DB*/
if (isset($_POST["pseudo"], $_POST["email"], $_POST["msg"])) {
    $pseudo = htmlspecialchars(strip_tags(trim($_POST["pseudo"])), ENT_QUOTES);
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])), ENT_QUOTES);
    $msg = htmlspecialchars(strip_tags(trim($_POST["msg"])), ENT_QUOTES);

    if (!empty($pseudo) && !empty($email) && !empty($msg)) {
        mysqli_query($connectToDB, "INSERT INTO messages (pseudo,email,msg) VALUES ('$pseudo','$email','$msg')");
    }
}
/*Check page id*/
$page = "homepage";
$whiteList = ["homepage", "form", "admin"];
if (isset($_GET['idpage'])) {
    $page = $_GET['idpage'];
    if (!(in_array($page, $whiteList))) {
        $page = "homepage";
    }
}
$previousMessages = mysqli_query($connectToDB, "SELECT  * FROM `messages` ORDER BY id DESC;");
$nbMessages = mysqli_num_rows($previousMessages);
$messages = mysqli_fetch_all($previousMessages, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/golden_book.css" rel="stylesheet">
    <title>GoldenBook</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="?idpage=homepage">Read last messages</a></li>
            <li><a href="?idpage=form">Send a message</a></li>
            <li><a href="?idpage=admin">Edit messages</a></li>
        </ul>
    </nav>
    <?php
    if ($page === "homepage") {
        include("./homepage.php");
    } elseif ($page === "form") {
        include("./form.php");
    } elseif ($page === "admin") {
        include("./editing.php");
    }
    ?>

    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>