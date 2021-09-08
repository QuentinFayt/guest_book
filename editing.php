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
        <table>
            <!-- Title : first row table -->
            <tr>
                <th>Id</th>
                <th>Pseudo</th>
                <th>Email</th>
                <th>Message</th>
                <th>Date-Time</th>
                <th>
                    <!-- Edit -->
                </th>
                <th>
                    <!-- Delete -->
                </th>
            </tr>
            <!-- On va boucler sur chaque nouvelle ligne pour chaque message présent dans la base de données plutôt que d'afficher en dur X messages -->
            <!-- Content rows -->
            <tr>
                <th>1</th>
                <th>...</th>
                <th>...</th>
                <th>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consectetur qui consequuntur autem molestiae veritatis hic reprehenderit, dolor magnam et esse iure vel quisquam error quas eum sunt pariatur dicta assumenda?</th><!-- First message in index.php -->
                <th>...</th>
                <th><button>Edit</button></th>
                <th><button>Delete</button></th>
            </tr>
            <tr>
                <th>2</th>
                <th>...</th>
                <th>...</th>
                <th>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum itaque pariatur, est porro incidunt eligendi quo numquam expedita odio cumque beatae excepturi nesciunt voluptatibus placeat, omnis repellendus aspernatur architecto explicabo!</th> <!-- Second message in index.php -->
                <th>...</th>
                <th><button>Edit</button></th>
                <th><button>Delete</button></th>
            </tr>
        </table>
    </main>
    <footer>
        <hr>
        </hr>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M</p>
    </footer>
</body>

</html>