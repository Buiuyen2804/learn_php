<?php 
    require_once 'pdo.php';
    $data = [
        'prodName' => $_POST['prodName'],
        'prodPrice' => $_POST['prodPrice'],
        'cateId' => $_POST['cateId'],
        'id' => $_GET['id']
    ];
    updateProdData($data);
    header("Location: http://localhost/learn_php/btvn8/product/index.php");
?>

