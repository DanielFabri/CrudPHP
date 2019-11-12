<?php
    //recuperar os dados enviados pelo metodo post
$idcli = $_POST['update-cliente-id'];
$nome = $_POST['update-cliente-nome'];
$rg = $_POST['update-cliente-rg'];
$cpf = $_POST['update-cliente-cpf'];
$dateCli = date("Y/d/m", strtotime($_POST['update-cliente-date']));
$end = $_POST['update-cliente-endereco'];
$nunH = $_POST['update-cliente-nunber'];
$cidde = $_POST['update-cliente-cidade'];
$uf = $_POST['update-cliente-uf'];
    

    if(!empty($nome) && !empty($rg) && !empty($cpf)){
        include 'banco.php'; 
        $pdo = Banco::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "UPDATE clientes SET nome=?, rg=?, cpf=?, datanascli=?, endereco=?, numeroCasa=?, cidade=?, uf=? WHERE id=?;";
        $q = $pdo->prepare($sql); 
        $q->execute(array( $nome, $rg, $cpf, $dateCli, $end, $nunH, $cidde, $uf,$idcli));
        Banco::desconectar();
    }
    header("location:lstClientes.php");

?> 