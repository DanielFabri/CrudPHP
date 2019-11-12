<?php 
     include 'banco.php';
    $id = trim($_GET['id']);
    $pdo = Banco::conectar();
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = " SELECT * FROM cerveja WHERE id= ?"; 
    $q = $pdo->prepare($sql); 
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC); 
    $sku = $data['sku'];
    $nome = $data['nome'];
    $desc = $data['descricao'];
    $abv = $data['teoralcoolico'];
    $sabor = $data['sabor'];
    $origm = $data['origen'];
    $preco= $data['valor'];
    $estq = $data['qtdeEstoque'];
    Banco::desconectar(); 
?>

<!DOCTYPE html>
<html lang="pt">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Formulario Editar Cerveja</title>

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
        <h1 class="mt-4">Editar Produto</h1>
        <form id="frmEdtCervj" name="frmEdtCervj" method="POST" action="edtCervj.php">

          <div class="row">
            <div class="col-sm-1">
                <div class="form-group">
                    <label for="lblId">ID: <?php echo $id ?></label>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                </div>
              </div>
              <div class="col-sm-1">
                  <div class="form-group">
                      <label for="lblSku">SKU</label>
                      <input type="text" class="form-control" id="update-produto-sku" name="update-produto-sku" value="<?php echo $sku ?>" >
                      
                  </div>
              </div>
                    
              <div class="col">
                  <div class="form-group">
                      <label for="lblNome">Nome:</label>
                      <input type="text" class="form-control" id="update-produto-nome" name="update-produto-nome" value="<?php echo $nome ?>" />
                  </div>
              </div>
          </div>
        
          <div class="form-group">
            <label for="lblDesc">Descrição:</label>
            <input type="text" class="form-control" id="update-produto-descricao" name="update-produto-descricao" value="<?php echo $desc ?>" />
          </div>
          <div class="row">
              <div class="col-sm-2">
                      <div class="form-group">
                          <label for="lblAbv">ABV:</label>
                          <input type="text" class="form-control" id="update-produto-abv" name="update-produto-abv" value="<?php echo $abv ?>">
                      </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                          <label for="lbSabor">Sabor:</label>
                          <input type="text" class="form-control" id="update-produto-sabr" name="update-produto-sabr" value="<?php echo $sabor ?>">
                      </div>
                  </div>
          </div>

          <div class="form-group">
              <label for="lblPaiOrig">Pais Origem:</label>
              <input type="text" class="form-control" id="update-produto-orign" name="update-produto-orign" value="<?php echo $origm ?>">
          </div>
              
          <div class="row">
                  <div class="col-sm-3">
                      <div class="form-group">
                          <label for="lblPrco">Preço:</label>
                          <input type="number"  class="form-control" id="update-produto-preco" name="update-produto-preco" value="<?php echo $preco ?>"/>
                      </div>
                  </div>
                  
                  <div class="col-sm-3">
                      <div class="form-group">
                          <label for="lblEstq">Estoque</label>
                          <input type="number" class="form-control" id="update-produto-estoque"  name="update-produto-estoque" value="<?php echo $estq ?>"/>
                      </div>
                  </div>
          </div>
          <!-- botoes -->
          <input type="submit" id="btnGrv" name="btnGrv" class="btn btn-success" value="GRAVAR">
          <input type="button" id="btnVoltar" name="btnVoltar" class="btn btn-warning" value="Voltar" onclick="javascript: location.href='lstCervj.php'">
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
