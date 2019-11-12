<?php 
    
    $sku = trim($_POST['input-produto-sku']);   
    $nome = trim($_POST['input-produto-nome']);
    $desc = trim($_POST['input-produto-descricao']);
    $abv =  trim($_POST['input-produto-abv']);
    $sabor = trim($_POST['input-produto-sabr']);
    $origm = trim($_POST['input-produto-orign']);
    $preco = $_POST['input-produto-preco'];
    $estq =  $_POST['input-produto-estoque'];

    if (!empty($nome) && !empty($desc) && !empty($preco)){
        include 'banco.php';
        $pdo = Banco::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO cerveja ( sku, nome, descricao, teoralcoolico, sabor, origen, qtdeEstoque, valor) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?);";
        $q = $pdo->prepare($sql); 
        $q->execute(array($sku, $nome, $desc, $abv, $sabor, $origm,  $estq, $preco)); 
        Banco::desconectar(); 
    }
    header("location:lstCervj.php"); 
    
?>