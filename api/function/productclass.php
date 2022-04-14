<?php

class product {
    private $id;

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

    public function insertProduct(){

    }

    public function deleteProduct(){

    }

    public function editProduct(){

    }

    public function getAllProduct(){
        $db = $this->connectdb();

        $query = $db->prepare("SELECT * FROM products");
        $query->execute();
        $result = $query->fetchAll();
        // return $result;
        // var_dump($result);
    }

}