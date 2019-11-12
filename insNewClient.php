<?php 
 
    $nome = trim($_POST['input-cliente-nome']);
    $rg = trim($_POST['input-cliente-rg']);
    $cpf = trim($_POST['input-cliente-cpf']);
    $date = trim($_POST['input-produto-date']);
    $end = trim($_POST['input-cliente-endereco']);
    $nunH = trim($_POST['input-cliente-nunber']);
    $cidde =  trim($_POST['input-cliente-cidade']);
    $uf = trim($_POST['input-cliente-uf']);
    
    if (!empty($nome) && !empty($date) && !empty($cidde) && !empty($uf)){
        include 'banco.php';
        $pdo = Banco::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO clientes ( nome, rg, cpf, datanascli, endereco, numeroCasa, cidade, uf) VALUES ( ?, ?, ?, ?, ?, ?, ?, ? );";
        $q = $pdo->prepare($sql); 
        $q->execute(array($nome, $rg, $cpf, $date, $end, $nunH, $cidde, $uf)); 
        Banco::desconectar(); 
    }
    header("location:lstClientes.php"); 
    
?>