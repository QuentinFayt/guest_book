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
        <section class="noMsgYet">
            <h2>This GoldenBook doesn't have any message yet!</h2>
            <p>But please, be our guest and go to the "send a message" page to test it! Then come back here to read it :)</p>
        </section>
        <!-- Won't show up if there are no messages in the DB -->
        <section class="userMsg">
            <h2>Last messages</h2>
            <!-- will get the informations from the DB by a request like SELECT `pseudo`, `msg`, `date_msg` FROM `messages` ORDER BY `date_msg` DESC that will order it from the newer to the older-->
            <!-- On va boucler sur article pour chaque message présent dans la base de données plutôt que d'afficher en dur X messages-->
            <article>                
                <!-- h3 is the title of the message with user name and email, div content is the user's message, p content is the date the message was sent-->
                <h3>Camille's message:</h3>
                <div>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum itaque pariatur, est porro incidunt eligendi quo numquam expedita odio cumque beatae excepturi nesciunt voluptatibus placeat, omnis repellendus aspernatur architecto explicabo!</div>
                <p>written the: 2021-09-08 11:32:52</p>
            </article>
            <article>                
                <h3>Quentin's message:</h3>
                <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur qui consequuntur autem molestiae veritatis hic reprehenderit, dolor magnam et esse iure vel quisquam error quas eum sunt pariatur dicta assumenda?</div>
                <p>written the: 2021-09-08 11:19:20</p>
            </article>
        </section>
    </main>
    <footer>
        <hr>
        </hr>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>