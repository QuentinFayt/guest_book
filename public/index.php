<?php
session_start();

require_once ("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./guest_book.css" rel="stylesheet">
    <title>Guest Book</title>
</head>

<body>
    <nav>
    <?php
        require("../controller/load_nav.php");
    ?>
    </nav>
    <?php
        require("../controller/load_page.php");
    ?>
    <footer>
        <p>Réalisé par Quentin Fayt, dans le cadre de la formation Web Développeur du CF2M </p>
    </footer>
</body>

</html>