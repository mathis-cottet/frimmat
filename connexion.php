<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | connexion</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/connexion.css">
    <script src="https://kit.fontawesome.com/385c6d2e8a.js" crossorigin="anonymous"></script>   
</head>



<!-- ////// Pour ajouter des utilisateurs ////// -->
<?php
// $msg = '';
// require_once('api/function/userclass.php');
// if(isset($_POST['btn_register'])){
//     $user = new User();
//     $msg = $user->register($_POST['email'], $_POST['password']);
// }


?>

<!-- <body>
    <form method="post">
        <div>
            <label for="email">E-mail</label><br>
            <input type="email" name="email" id="email" placeholder="john.doe@example.com">
        </div>
        <div>
            <label for="password">Mot de passe</label><br>
            <input type="password" name="password" id="password" placeholder="******">
        </div>
        <button name="btn_register">s'inscrire</button>
    </form>
</body>
</html> -->


<?php 
session_start();
$msg = '';

require_once('api/function/userclass.php');
if(isset($_POST['btn_connect'])){
    $user = new User();
    $msg = $user->connect($_POST['email'], $_POST['password']);
    // if($msg === ''){
    //     $_SESSION['user'];
    //     header('Location: assets/layouts/admin.php');
    // }
}


?>


<body>
    <div class="container-connexion">
        <form class="formulaire-connexion" method="post">
            <h1>Connexion administrateur</h1>
            <div>
                <i class="fa-solid fa-at"></i>
                <label for="email">E-mail</label><br>
                <input type="email" name="email" id="email-connexion" placeholder="john.doe@example.com">
            </div>
            <div>
                <i class="fa-solid fa-lock"></i>
                <label for="password">Mot de passe</label><br>
                <input type="password" name="password" id="email-connexion" placeholder="******">
            
            </div>
        
            <button class="button-connexion" name="btn_connect">Connexion</button>
            <?php 
                echo $msg;
            ?>
        </form>
    </div>
</body>
</html>

