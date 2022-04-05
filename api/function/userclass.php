<?php  

class user {
    private $email;
    private $password;

    public function connectdb(){
        try
        {
            return new PDO('mysql:host=localhost;dbname=frimmat_bdd', 'root', '');
        }
        catch(PDOException $erreur)
        {
            echo $erreur->getMessage();
        }
    }

// --------- Pour ajouter des utilisateurs -------------


    // public function register($email, $password){
    //     $db = $this->connectdb();

    //     $email = htmlspecialchars(trim($email));
    //     $password = htmlspecialchars(trim($password));

    //     $password = password_hash($password, PASSWORD_BCRYPT);
    //     $query = $db->prepare("INSERT INTO users (email, password) VALUES ('$email', '$password')");
    //     $query->execute();

    // }

// -------------- Connexion au pannel admin -----------------

public function connect($email, $password) {
    $db = $this->connectdb();
    $msg = '';
    $email = htmlspecialchars(trim($email));
    $password = htmlspecialchars(trim($password));

    $query = $db->prepare("SELECT email FROM users WHERE email = '$email'");
    $query->execute();

    if($query->rowCount()){
        $query = $db->prepare("SELECT password FROM users WHERE email = '$email'");
        $query->execute();

        $results = $query->fetch(PDO::FETCH_OBJ);
        $cryptedpass = $results->password;

        if(password_verify($password, $cryptedpass) == true){
            
            $query = $db->prepare("SELECT * FROM users WHERE email = '$email'");
            $query->execute();

            $result = $query->fetch(PDO::FETCH_OBJ);
            $this->id =$result->id;
            $this->email = $result->email;

            $_SESSION['user'];
            header('Location: ./assets/layouts/admin.php');
        }
        else{
            $msg = "Mot de passe incorrect";
        }
    }
    else{
        $msg = "Adresse mail incorrect";
    }

    return $msg;
    $db = null;

}






}






















?>