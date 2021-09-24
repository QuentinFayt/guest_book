<?php
?>
<header>
    <h1>Send a message</h1>
</header>
<main>
    <form name="messages" method="post" action="index.php" class="send_message">
        <div class="name">
            <label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" maxlength="30" required />
        </div>
        <div class="mail">
            <label for="email">E-mail</label><input type="email" name="email" id="email" maxlength="50" required />
        </div>
        <div class="message">
            <label for="msg">Message</label><textarea type="text" name="msg" id="msg" maxlength="1000" placeholder="Your message here" required></textarea>
        </div>
        <div class="submit">
            <input type="submit" value="Send" />
        </div>
    </form>
</main>