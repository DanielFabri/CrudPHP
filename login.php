<?php 
  $usr = trim($_POST['user']); 
  $pwd = trim($_POST['pwd']); 

  include 'banco.php'; 
  $pdo = Banco::conectar(); 
  $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  $sql = "SELECT * FROM usuarios WHERE user=?"; 
  $q = $pdo->prepare($sql); 
  $q->execute(array($usr));
  $data = $q->fetch(PDO::FETCH_ASSOC); 
  $password =$data['pwd'];  
  Banco::desconectar();

// Verifica se a senha digitada é valida
if (md5($pwd)== $password) {
    session_start();
       $_SESSION['user'] = $usr; 
       Header("Location: lstCervj.php");;

//  echo "login: ".$usr;
//  echo "<br/>";
//  echo "password".$password;
    
}
else {
    // echo "Usuario e Senha não Cadastrado.....";
    header("Location: index.html");
}
?>