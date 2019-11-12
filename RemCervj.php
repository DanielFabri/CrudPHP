<?php
    //recuperar os dados enviados pelo metodo post
    $id = trim($_POST['id']);
   
    
    if(!empty($id)){
        include 'banco.php'; 
        $pdo = Banco::conectar(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        $sql = "DELETE FROM cerveja WHERE id=?;";
        $q = $pdo->prepare($sql); 
        $q->execute(array($id));
        Banco::desconectar();
    }
     header("location:lstCervj.php");
?>