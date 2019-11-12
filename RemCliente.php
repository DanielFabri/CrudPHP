<?php
    //recuperar os dados enviados pelo metodo post
    $idcli = trim($_POST['id']);
   
    
    if(!empty($idcli)){
        include 'banco.php'; 
        $pdo = Banco::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM clientes WHERE id=?;";
        $q = $pdo->prepare($sql); 
        $q->execute(array($idcli));
        Banco::desconectar();
    }
     header("location:lstClientes.php");
?>