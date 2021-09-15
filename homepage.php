<?php
$url = $_SERVER['REQUEST_URI'];
if (substr($url, 1) === "") {
    header('Location: /index.php');
} elseif (strpos($url, '/index') !== 0) {
    header('Location: https://http.cat/404');
}
?>
<header>
    <h1>Read last messages</h1>
</header>
<main>
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
            <a href="?idpage=form">Send a message</a>:()
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