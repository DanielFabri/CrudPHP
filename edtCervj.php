<?php
    //recuperar os dados enviados pelo metodo post
    $id = $_POST['id'];
    $sku = $_POST['update-produto-sku'];   
    $nome = $_POST['update-produto-nome'];
    $desc = $_POST['update-produto-descricao'];
    $abv = $_POST['update-produto-abv'];
    $sabor = $_POST['update-produto-sabr'];
    $origm = $_POST['update-produto-orign'];
    $estq =  $_POST['update-produto-estoque'];
    $preco = $_POST['update-produto-preco'];
    

    if(!empty($nome) && !empty($desc) && !empty($preco)){
        include 'banco.php'; 
        $pdo = Banco::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE cerveja SET sku=?, nome=?, descricao=?, teoralcoolico=?, sabor=?, origen=?, qtdeEstoque=?, valor=? WHERE id=?;";
        $q = $pdo->prepare($sql); 
        $q->execute(array($sku, $nome, $desc, $abv, $sabor, $origm,  $estq, $preco, $id));
        Banco::desconectar();
    }
    header("location:lstCervj.php");
?>