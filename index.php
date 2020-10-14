<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>I'll be there for you</title>
</head>
<body>
<?php require_once 'PDO,un ami pour la vie.php'?>
    <h1>Add your friends to the list!</h1>
    <form method="post">
        <input type="text" name="firstname" placeholder="Enter firstname"/><br>
        <input type="text" name="lastname" placeholder="Enter lastname"/><br>
        <button type="submit" name="submit" value="submit">Add friend!</button>
    </form>
</body>
</html>
