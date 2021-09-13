<?php

$connectToDB = mysqli_connect("localhost", "root", "", "goldenbook", 3306);
mysqli_set_charset($connectToDB, "utf8");
/* Delete data from DB with button*/
if (!empty($_POST) && isset($_POST["delete_id"])) {
    $idToDelete = $_POST["delete_id"];
    mysqli_query($connectToDB, "DELETE FROM messages WHERE id='$idToDelete'");

    /*Reset primary key to last id number in DB*/
    $lastId = mysqli_fetch_all(mysqli_query($connectToDB, "SELECT id FROM messages ORDER BY id DESC LIMIT 1"), MYSQLI_ASSOC);
    $lastId = $lastId[0]["id"];
    mysqli_query($connectToDB, "ALTER TABLE messages AUTO_INCREMENT = $lastId");
}
/*Send new Data to DB*/
if (!empty($_POST) && isset($_POST["pseudo"]) && isset($_POST["email"]) && isset($_POST["msg"])) {
    $pseudo = htmlspecialchars(strip_tags(trim($_POST["pseudo"])), ENT_QUOTES);
    $email = htmlspecialchars(strip_tags(trim($_POST["email"])), ENT_QUOTES);
    $msg = htmlspecialchars(strip_tags(trim($_POST["msg"])), ENT_QUOTES);

    if (!empty($pseudo) && !empty($email) && !empty($msg)) {
        mysqli_query($connectToDB, "INSERT INTO messages (pseudo,email,msg) VALUES ('$pseudo','$email','$msg')");
    }
}
/*Check page id*/
if (isset($_GET['idpage']) && ctype_digit($_GET['idpage'])) {
    $id = (int) $_GET['idpage'];
    $id = $id <= 0 || $id > 3 ? 1 : $id;
} else {
    $id = 1;
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
            <li><a href="?idpage=1">Read last messages</a></li>
            <li><a href="?idpage=2">Send a message</a></li>
            <li><a href="?idpage=3">Edit messages</a></li>
        </ul>
    </nav>
    <?php
    if ($id === 1) {
        include("./homepage.php");
    } elseif ($id === 2) {
        include("./form.php");
    } elseif ($id === 3) {
        include("./editing.php");
    }
    ?>

    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>