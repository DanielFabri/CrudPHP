

<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Formulario Inserir Novo Cliente</title>

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
        <h1 class="mt-4">Cadastro de Clientes</h1>
        <form id="frmInsClientes" name="frmInsClientes" method="POST" action="insNewClient.php">
                  
          <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="lbClintNome">Nome:</label>
                    <input type="text" class="form-control"  id="input-cliente-nome" name="input-cliente-nome" />
                </div>
            </div>
                
          </div>
          <div class="row">
          <div class="col-sm-4">
                <div class="form-group">
                        <label for="lbClintDate">Data Nascimento:</label>
                        <input type="date" class="form-control" id="input-produto-date" name="input-produto-date" />
                </div>
            </div>
              <div class="col-sm-4">
                      <div class="form-group">
                          <label for="lbClintRg">Rg:</label>
                          <input type="text" class="form-control" id="input-cliente-rg" name="input-cliente-rg">
                      </div>
                  </div>
                  <div class="col-sm-4">
                      <div class="form-group">
                          <label for="lbClintCpf"><i class="fas fa-utensil-knife">Cpf:</i></label>
                          <input type="text" class="form-control" id="input-cliente-cpf" name="input-cliente-cpf" >
                      </div>
                  </div>
          </div>
          <div class="row">
              <div class="col">
                      <div class="form-group">
                          <label for="lbClintEnd">Rua:</label>
                          <input type="text" class="form-control" id="input-cliente-endereco" name="input-cliente-endereco">
                      </div>
                  </div>
                  <div class="col-sm-1">
                      <div class="form-group">
                          <label for="lbClintNunber"><i class="fas fa-utensil-knife">N°:</i></label>
                          <input type="text" class="form-control" id="input-cliente-nunber" name="input-cliente-nunber">
                      </div>
                  </div>
          </div>
          <div class="row">
              <div class="col">
                      <div class="form-group">
                          <label for="lbClintCidde">Cidade:</label>
                          <input type="text" class="form-control" id="input-cliente-cidade" name="input-cliente-cidade">
                      </div>
                  </div>
                  <div class="col-sm-1">
                      <div class="form-group">
                          <label for="lbClintUf"><i class="fas fa-utensil-knife">UF:</i></label>
                          <input type="text" class="form-control" id="input-cliente-uf" name="input-cliente-uf">
                      </div>
                  </div>
          </div>
          <!-- botoes -->
          <input type="submit" id="btnGrvClient" name="btnGrvClient" class="btn btn-success" value="Gravar">
          <input type="reset" id="btnClrClient" name="btnClrClient" class="btn btn-secondary" value="Limpar">
          
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
