<?php

require_once 'app/AdminPanel.php';
    $admin = new AdminPanel();



    $description = trim($_POST['description']);
    $code = trim($_POST['code']);

    $admin->append($description, $code);


?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>MySQL</title>

        <meta charset="UTF-8">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="public/css/adminStyle.css">
        <link rel="stylesheet" href="public/css/adminMobileStyle.css">
          
    </head>
    
    <body>

    <nav>
        <menu>
            <ul>
                <li id="navCreate">Create</li>
                <li id="navRead">Read</li>
                <li id="navUpdate">Update</li>
                <li id="navDelete">Delete</li>
            </ul>
        </menu>
    </nav>

    <div>
        <form action="admin.php" method="POST">
            <textarea name="description" cols="50" rows="5" autocomplete="off">
            </textarea>
            <textarea name="code" cols="50" rows="5" autocomplete="off">
            </textarea>
                <input type="submit" name="send" value="SEND" class="send">
        </form>
    </div>

    </body>
</html>


