<?php
    include_once('../../api/function/productclass.php');
    $product = new Product;
    $produitinfo=$product->getAllProduct();

?>

<div>
    <p><?= $produitinfo ?> </p>
</div>

