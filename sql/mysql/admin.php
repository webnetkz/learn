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
    if(isset($_POST['send'])) {
        $admin->append($description, $code, $db);
    }

    // Изменение записи
    if(isset($_POST['change'])) {

        $id = $_POST['query'];
        $admin->change($id, $description, $code, $db);
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
          
    </head>
    
    <body>

    <nav>
        <menu>
            <ul>
            <li id="selectItemMenu" class="sBtn"></li>
                <li class="btnMenu" id="navCreate" onclick="db.value = '1';selectItemMenu.innerHTML = 'Create';">Create</li>
                <li class="btnMenu" id="navRead" onclick="db.value = '2';selectItemMenu.innerHTML = 'Read';">Read</li>
                <li class="btnMenu" id="navUpdate" onclick="db.value = '3';selectItemMenu.innerHTML = 'Update';">Update</li>
                <li class="btnMenu" id="navDelete" onclick="db.value = '4';selectItemMenu.innerHTML = 'Delete';">Delete</li>
                
            </ul>
        </menu>
    </nav>

    <div>
        <form action="admin.php" method="POST" id="form">
            <textarea name="description" cols="50" rows="5" autocomplete="off">
            </textarea>
            <textarea name="code" cols="50" rows="5" autocomplete="off">
            </textarea>
            <br>
                <input type="submit" name="send" value="APPEND" class="send">
                <button type="submit" name="change" class="send">CHANGE</button>
                <input type="text" id="db" name="db" style="display: none;">
                <input type="text" name="query" autocomplete="off" class="selectId">
        </form>
    </div>

    </body>
</html>
