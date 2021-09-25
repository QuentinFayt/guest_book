<?php
//check if $_POST is set
if(isset($_POST["admin_pseudo"]) && isset($_POST["admin_mdp"])){

    $userNameLogin =  htmlspecialchars(strip_tags(trim($_POST["admin_pseudo"])),ENT_QUOTES);
    $userPasswordLogin =  htmlspecialchars(strip_tags(trim($_POST["admin_mdp"])),ENT_QUOTES);

//check if username exist in DB => count nb of admin where admin_pseudo = userNameLogin if 0, doesn't exist && check if hashed pwd exist in DB
    if(mysqli_fetch_row(mysqli_query($connectToDB,"SELECT count(*) FROM admin WHERE admin_pseudo = '$userNameLogin'"))[0] &&password_verify($userPasswordLogin,mysqli_fetch_row(mysqli_query($connectToDB,"SELECT admin_mdp FROM admin WHERE admin_pseudo = '$userNameLogin'"))[0])){
            $_SESSION["IdSession"] = session_id();
    }
    else{
        header('Location:index.php?idpage=login');
    }
}