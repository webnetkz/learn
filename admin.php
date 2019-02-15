<?php

   
require_once 'app/AdminPanel.php';
    $admin = new AdminPanel();


    if(!empty($_POST['description'])) {
		$description = trim($_POST['description']);
        $code = trim($_POST['code']);
        $selectDb = $_POST['db'];
	}

    // Проверка на выбор базы данных
    if(!empty($selectDb))
    switch ($selectDb) {
        case 'create_sql':
            $db = 'create_sql';
            break;
        case 'read_sql':
            $db = 'read_sql';
            break;
        case 'update_sql':
            $db = 'update_sql';
            break;
        case 'delete_sql':
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

    // Выбор записи
    if(isset($_POST['select'])) {

        $id = $_POST['query'];
        $select = $admin->select($id, $db);
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
            <li id="selectItemMenu" class="sBtn"><?php if(isset($db)) {echo $db;}?></li>
                <li class="btnMenu" id="navCreate" onclick="db.value = 'create_sql';selectItemMenu.innerHTML = 'Create';">Create</li>
                <li class="btnMenu" id="navRead" onclick="db.value = 'read_sql';selectItemMenu.innerHTML = 'Read';">Read</li>
                <li class="btnMenu" id="navUpdate" onclick="db.value = 'update_sql';selectItemMenu.innerHTML = 'Update';">Update</li>
                <li class="btnMenu" id="navDelete" onclick="db.value = 'delete_sql';selectItemMenu.innerHTML = 'Delete';">Delete</li>
                
            </ul>
        </menu>
    </nav>

    <div>
        <form action="admin.php" method="POST" id="form">
            <textarea name="description" cols="50" rows="5" autocomplete="off">
                <?php
                    if(isset($select)) {
                        echo $select[0]['description'];
                    }
                ?>
            </textarea>
            <textarea name="code" cols="50" rows="5" autocomplete="off">
                <?php
                    if(isset($select)) {
                        echo $select[0]['code'];
                    }
                ?>
            </textarea>
            <br>
                <input type="submit" name="send" value="APPEND" class="send">
                <button type="submit" name="change" class="send">CHANGE</button>
                <input type="text" id="db" name="db" style="display: none;" value="<?php if(isset($db)) {echo $db;}?>">
                <button type="submit" name="select" class="send">SELECT</button>
                <input type="text" name="query" autocomplete="off" class="selectId" value="<?php if(isset($select)) {echo $select[0]['id'];}?>">
        </form>
    </div>

    </body>
</html>
