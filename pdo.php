<?php 

require_once 'connec.php';

$pdo = new \pdo(DSN, USER, PASS);

    if(isset($_POST['submit']) && $_POST['submit']=='submit'){
    $sql = 'INSERT INTO friend VALUES (null, :firstname, :lastname)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':firstname', $_POST['firstname'], PDO::PARAM_STR);
    $statement->bindValue(':lastname', $_POST['lastname'], PDO::PARAM_STR);
    $statement->execute();
    $friends = $statement->fetchAll();
    
    echo 'Insert complete!';
    echo '<meta http-equiv="refresh" content="1;URL=index.php">';
    };

    $query = 'SELECT * FROM friend';
    $statement = $pdo->query($query);
    $friends = $statement->fetchAll();
    foreach ($friends as $friend) {
        echo '<li>'.$friend['firstname'] . ' ' . $friend['lastname'].'</li>';
    }

 
