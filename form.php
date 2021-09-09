<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/golden_book.css" rel="stylesheet">
    <title>Form</title>
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
        <h1>Send a message</h1>
    </header>
    <main>
        <!-- Will send the informations to the DB with a request like INSERT INTO `messages`
        VALUES (NULL,"user-name","user-email","user-message",NOW())-->
        <form method="POST" action="form.php">
            <div class="name">
                <label for="pseudo">Pseudo</label><input type="text" name="pseudo" id="pseudo" maxlength="30"/>
            </div>
            <div class="mail">
                <label for="email">E-mail</label><input type="email" name="email" id="email" maxlength="50" />
            </div>
            <div class="message">
                <label for="msg">Message</label><textarea type="text" name="msg" id="msg" maxlength="1000" placeholder="Your message here"></textarea>
            </div>
            <div class="submit">
                <input type="submit" value="Send" />
            </div>
        </form>
    </main>
    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>