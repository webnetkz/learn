<?php

require_once 'Db.php';

$pdo = new Db();

if(!empty($_POST['description']) && !empty($_POST['code'])) {
    print_r($_POST);
}

?>

<form action="admin.php" method="POST">
    <p><input type="text" name="description" placeholder="Description" autocomplete="off"></p>
    <p><input type="text" name="code" placeholder="Code" autocomplete="off"></p>
        <button type="submin" name="send">Send</button>
</form>