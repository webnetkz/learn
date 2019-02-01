<?php

require_once 'app/AdminPanel.php';
    $admin = new AdminPanel();



    $description = trim($_POST['description']);
    $code = trim($_POST['code']);

    // Проверка на выбор базы данных
    switch($_POST['db']) {
        case 1:
            $db = 'create_sql';
            break;
        case 2:
            $db = 'read_sql';
            break;
        case 3:
            $db = 'update_sql';
            break;
        case 4:
            $db = 'delete_sql';
            break;
    }

    // Добавление записи в таблицу
    if(!empty($description) && !empty($code)) {
        $admin->append($description, $code, $db);
    }



?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Admin Panel</title>

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
                <li id="navCreate" onclick="db.value = '1'">Create</li>
                <li id="navRead" onclick="db.value = '2'">Read</li>
                <li id="navUpdate" onclick="db.value = '3'">Update</li>
                <li id="navDelete" onclick="db.value = '4'">Delete</li>
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
                <input type="text" id="db" name="db" style="display: none;">
        </form>
    </div>

    </body>
</html>


