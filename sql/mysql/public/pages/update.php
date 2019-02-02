<?php

    require_once '../../app/DataBase.php';
    $pdo = new DataBase();

    
    $result = $pdo->pdo->query('SELECT * FROM update_sql;');
    $stmt = $result->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Update</title>

        <meta charset="UTF-8">
        <meta name="author" content="TOO WebNet">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="index, follow">

        <link rel="shortcut icon" href="../../miniLogoWebnet.png" type="image/png">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/mobileStyle.css">
          
    </head>
    
    <body>

        <img src="../img/logoMySQL.svg" alt="logotype MySQL" class="logoBackground">

        <header>
                <a href="../../index.html">
                        <img src="../img/logoMySQL.png" alt="logotype MySQL" class="logo">
                </a>
            <nav>
                <ul>
                    <a href="create.php" class="menuList">
                        <li class="menuItem">Create</li>
                    </a>
                    <a href="read.php" class="menuList">
                        <li class="menuItem">Read</li>
                    </a>
                    <a href="update.php" class="menuList">
                        <li class="menuItem">Update</li>
                    </a>
                    <a href="delete.php" class="menuList">
                        <li class="menuItem">Delete</li>
                    </a>
                </ul>
            </nav>
        </header>

        <main>
            <h1>Update commands</h1>
                <hr>

                <?php

                    foreach($stmt as $key => $value) {
                        echo '<p>'.$value['description'].'</p>';
                        echo '<code>'.$value['code'].'</code><hr>';
                    }

                ?>

        </main>
    </body>
</html>