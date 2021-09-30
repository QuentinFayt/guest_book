<?php
$connectToDB = @mysqli_connect(HOST,USER,PWD,NAME,PORT);
if(!$connectToDB){
    exit("Connexion problem : ".mysqli_connect_error());
}
mysqli_set_charset($connectToDB, "utf8");
/* Delete data from DB with button*/
if (isset($_POST["delete_id"])) {
    mysqli_query($connectToDB, "DELETE FROM messages WHERE id= '$_POST[delete_id]'");

    /*Reset primary key to last id number in DB*/
    /*$lastId = mysqli_fetch_all(mysqli_query($connectToDB, "SELECT id FROM messages ORDER BY id DESC LIMIT 1"), MYSQLI_ASSOC);
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

$previousMessages = mysqli_query($connectToDB, "SELECT  * FROM `messages` ORDER BY id DESC;");
$nbMessages = mysqli_num_rows($previousMessages);
if($nbMessages){
    $messages = mysqli_fetch_all($previousMessages, MYSQLI_ASSOC);
}