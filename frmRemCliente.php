
<?php 

 include 'banco.php';
 $idcli = trim($_GET['id']);
 $pdo = Banco::conectar();
 $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 $sql = " SELECT * FROM clientes WHERE id= ?"; 
 $q = $pdo->prepare($sql); 
 $q->execute(array($idcli));
 $data = $q->fetch(PDO::FETCH_ASSOC); 
 $nomecli = $data['nome'];
 $rg = $data['rg'];
 $cpf = $data['cpf'];
 $date = $data['datanascli'];
 $end = $data['endereco'];
 $nunH = $data['numeroCasa'];
 $cidde= $data['cidade'];
 $uf = $data['uf'];
 Banco::desconectar(); 
?>
  

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>Formulario Remover Cliente</title>

<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

 <!-- Sidebar -->
 <div class="bg-light border-right" id="sidebar-wrapper">
   <div class="sidebar-heading">Brewer </div>
   <div class="list-group list-group-flush">
   <a href="frmInsCliente.php" class="list-group-item list-group-item-action bg-light">Cadastro Clientes</a>
     <a href="lstClientes.php" class="list-group-item list-group-item-action bg-light">Lista Clientes</a>
     <a href="formInsCervj.php" class="list-group-item list-group-item-action bg-light">Novo Cadastro</a>
     <a href="lstCervj.php" class="list-group-item list-group-item-action bg-light">lista Cadastradas</a>
   

   </div>
 </div>
 <!-- /#sidebar-wrapper -->

 <!-- Page Content -->
 <div id="page-content-wrapper">

   <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
     <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
         <li class="nav-item active">
           <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="#">Link</a>
         </li>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Dropdown
           </a>
           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="#">Action</a>
             <a class="dropdown-item" href="#">Another action</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">Something else here</a>
           </div>
         </li>
       </ul>
     </div>
   </nav>
   <!-- Inicio do formulario de Inserir Produto -->
   <div class="container-fluid">
     <!-- Cabecalho do Pagina -->
     <h1 class="mt-4">Remover Lientes</h1>
     <form id="frmRemCliente" name="frmRemCliente" method="POST" action="RemCliente.php"> 
       
       <div class="row">
         <div class="col-sm-1">
             <div class="form-group">
               <label for="lblCliId">
               <span class="textBold">ID:</span>
               <span class="textnormal"><?php echo $idcli ?></span>
               </label>
               <input type="hidden" name="id" value="<?php echo $idcli ?>"/>
           </div>
         </div> 
         
         <!--  -->
         <div class="col-sm-1">
             <div class="form-group">
                 <label for="lblCliNome">
                     <span class="textBold">Nome:</span>
                     <span class="textnormal"><?php echo $nomecli?></span>
                 </label>
                 
             </div>
         </div>
               <!--  -->
         <div class="col">
             <div class="form-group">
                     <label for="lblCliNome">
                         <span class="textBold">Nome:</span>
                         <span class="textnormal"><?php echo $nomecli?></span>
                     </label>
             </div>
         </div>
       </div>
       
       <!-- Fim da primeira linha -->
       <div class="form-group">
         <label for="lblCliRg">
             <span class="textBold">RG;</span>
             <span class="textnormal"><?php echo $rg?></span>
         </label>
       </div>
       <div class="row">
           <div class="col-sm-2">
                   <div class="form-group">
                       <label for="lblCliCpf">
                       <span class="textBold">cpf:</span>
                         <span class="textnormal"><?php echo $cpf?></span>
                       </label>
                   </div>
               </div>
               <div class="col">
                   <div class="form-group">
                       <label for="lblClidate">
                       <span class="textBold">Data Nascimento:</span>
                         <span class="textnormal"><?php echo $date?></span>
                       </label>
                   </div>
               </div>
       </div>

       <div class="form-group">
           <label for="lblCliRua">
           <span class="textBold">Rua:</span>
             <span class="textnormal"><?php echo $end?></span>
           </label>
       </div>
           
       <div class="row">
               <div class="col-sm-3">
                   <div class="form-group">
                       <label for="lblCliCidae">
                       <span class="textBold">Cidade:</span>
                         <span class="textnormal"><?php echo $cidde?></span>
                       </label>
                   </div>
               </div>
               
               <div class="col-sm-3">
                   <div class="form-group">
                       <label for="lblCliUf">
                       <span class="textBold">uf:</span>
                         <span class="textnormal"><?php echo $uf?></span>
                       </label>
                   </div>
               </div>
       </div>
       
       <!-- botoes -->
       <input type="submit" name="btnRem" id="btnRem"  class="btn btn-danger" value="Remover">
       <input type="button" name="btnVoltar" id="btnVoltar"  class="btn btn-info" value="Voltar" onclick="javascript: location.href='lstCervj.php'">
     

     </form> 

   </div>    
                 
 </div>
 
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
 $("#menu-toggle").click(function(e) {
   e.preventDefault();
   $("#wrapper").toggleClass("toggled");
 });
</script>

</body>

</html>
