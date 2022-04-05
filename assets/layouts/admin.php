

<?php 

include_once('../../api/function/userclass.php');

if(!$_SESSION['user']){
    header('Location: ../../connexion.php');
}
if(isset($_POST['disconnect'])){
    session_destroy();
    header('Location: ../../connexion.php');
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vous êtes connecté avec</h1>
    <form method="post">
        <button type="submit" name="disconnect">deconnexion</button>
    </form>
</body>
</html>
