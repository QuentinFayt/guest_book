<?php

$connectToDB = mysqli_connect("localhost", "root", "", "goldenbook", 3306);
mysqli_set_charset($connectToDB, "utf8");
if (!empty($_POST)) {
    $idToDelete = $_POST["delete_id"];
    mysqli_query($connectToDB, "DELETE FROM messages WHERE id='$idToDelete'");

    /*Reset primary key to last id number in DB*/
    $lastId = mysqli_fetch_all(mysqli_query($connectToDB, "SELECT id FROM messages ORDER BY id DESC LIMIT 1"), MYSQLI_ASSOC);
    $lastId = $lastId[0]["id"];
    mysqli_query($connectToDB, "ALTER TABLE messages AUTO_INCREMENT = $lastId");
}
$previousMessages = mysqli_query($connectToDB, "SELECT  * FROM `messages` ORDER BY id DESC;");

$messages = mysqli_fetch_all($previousMessages, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/golden_book.css" rel="stylesheet">
    <title>Message editing</title>
</head>

<body>
    <nav>
        <ul>
            <Li><a href="index.php">Read last messages</a></Li>
            <Li><a href="form.php">Send a message</a></Li>
            <Li><a href="editing.php">Edit messages</a></Li>
        </ul>
    </nav>
    <header>
        <h1>Edit messages</h1>
    </header>
    <main>
        <table class="admin">
            <!-- Title : first row table -->
            <tr class="adminMain">
                <th>Id</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date-Time</th>
                <th>
                    <!-- Delete with a button that will send a request like DELETE FROM `messages` WHERE id = X
                    x will be the message we want to erase-->
                </th>
            </tr>
            <?php
            foreach ($messages as $value) {
            ?>
                <tr>
                    <th><?= $value["id"] ?></th>
                    <th><?= $value["pseudo"] ?></th>
                    <th><?= $value["email"] ?></th>
                    <th><?= $value["msg"] ?></th>
                    <th><?= $value["date_msg"] ?></th>
                    <th>
                        <form method="post" class="delete_id"><input type="hidden" value="<?= $value["id"] ?>" name="delete_id" /><button type="submit">Delete</button></form>
                    </th>
                </tr>
            <?php
            }
            ?>
        </table>
    </main>
    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>