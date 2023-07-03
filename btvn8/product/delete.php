<?php
    require_once 'pdo.php';
    $id = ['id' => $_POST['id']];
    deleteProdData($id);
    header("Location: http://localhost/learn_php/btvn8/product/index.php");
?>