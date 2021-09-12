<?php

$connectToDB = mysqli_connect("localhost", "root", "", "goldenbook", 3306);
mysqli_set_charset($connectToDB, "utf8");

$previousMessages = mysqli_query($connectToDB, "SELECT `pseudo`, `msg`, `date_msg` FROM `messages` ORDER BY date_msg DESC;");

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
            <Li><a href="index.php">Read last messages</a></Li>
            <Li><a href="form.php">Send a message</a></Li>
            <Li><a href="editing.php">Edit messages</a></Li>
        </ul>
    </nav>
    <header>
        <h1>Read last messages</h1>
    </header>
    <main>
        <!-- Won't show up if there are messages in the DB  => will test this with php condition & a sql request
            (SELECT COUNT (id) FROM `message`) -->
        <!--         <section class="noMsgYet">
                <h2>This GoldenBook doesn't have any message yet!</h2>
                <p>But please, be our guest and go to the "send a message" page to test it! Then come back here to read it :)</p>
            </section> -->
        <?php
        if ($nbMessages < 0) {
        ?>
            <section class="noMsgYet">
                <h2>This GoldenBook doesn't have any message yet!</h2>
                <p>But please, be our guest and go to the "send a message" page to test it! Then come back here to read it :)</p>
            </section>";
        <?php
        } else {
        ?>
            <div class="sndMessage">
                <a href="form.php">Send a message</a>
            </div>
            <section class="userMsg">
                <h2>Last messages</h2>
                <?php
                foreach ($messages as $value) {
                ?>
                    <article>
                        <h3><?= $value["pseudo"] ?>'s message:</h3>
                        <div><?= $value["msg"] ?></div>
                        <p>written the: <?= $value["date_msg"] ?></p>
                    </article>
                <?php
                }
                ?>
            </section>
        <?php
        }
        ?>
    </main>
    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>