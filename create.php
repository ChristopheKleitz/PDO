<?php include 'header.php'; ?>

<form method="post" acton="liste.php">
    <input type="text" name="title" placeholder="Enter title"><br/>
    <textarea name="description" placeholder="Enter description"></textarea><br/>
    <button type="submit" name="submit" value="submit">Add article</button>
</form>

<?php 



//Si j'ai cliqué
if(isset($_POST['submit']) && $_POST['submit']=='submit'){
    $sql = 'INSERT INTO article VALUES (null, :title, :description)';
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':title', $_POST['title'], PDO::PARAM_STR);
    $statement->bindVAlue(':description', $_POST['description'], PDO::PARAM_STR);
    $statement->execute();

    echo '<h2>Insert complete !</h2>';
    echo '<meta http-equiv="refresh" content="1;URL=liste.php">';
};
