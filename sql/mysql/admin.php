<?php

require_once 'app/Db.php';
$pdo = new Db();

if(!empty($_POST['description']) && !empty($_POST['code'])) {
    
    $description = $_POST['description'];
    $code = addcslashes($_POST['code'], '\'');
    $sql = "INSERT INTO create_sql(description, code) VALUES('$description', '$code')";

    $result = $pdo->pdo->query($sql);


    if(isset($result)) {
        echo 'Запись добавлена';
    }
}

?>

<form action="admin.php" method="POST">
    <textarea name="description" cols="30" rows="10" autocomplete="off" placeholder="Description"></textarea>
    <textarea name="code" cols="30" rows="10" autocomplete="off" placeholder="Code"></textarea>
        <p><button type="submin" name="send">Send</button></p>
</form>