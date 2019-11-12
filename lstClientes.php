
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Lista de Clientes</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            
          </ul>
        </div>
      </nav>
      <!-- Inicio do formulario do Listar -->
        <div class="container-fluid">
            <!-- Cabecalho do Pagina -->
            <h1 class="mt-4">Lista de Clientes</h1>
            <br><br><br>
            <input type="button" id="addCliente" name="addCliente" class="btn btn-primary" value="Adiciona Novo Cliente"
             onclick="javascript: location.href= 'frmInsCliente.php' ">
             <br><br>
            <table class="table table-striped table-hover">
              <tr>
                  <th>ID</th>
                  <th>Nome</th>
                  <th>Rg</th>
                  <th>Cpf</th>
                  <th>Data Nascimento</th>
                  <th>Rua</th>
                  <th>N°</th>
                  <th>Cidade</th>
                  <th>UF</th>
                  <th></th>
                  <th></th>
              </tr>
            <!-- conexão no banco  -->
            <?php
                include 'banco.php';
                $pdo = Banco::conectar();
                $sql = 'SELECT * FROM clientes ORDER BY nome';
                // para cada registro da tabela
                foreach($pdo->query($sql)as $row){
            ?>
            <tr>
                <td><?php echo  $row['id']?></td>
                <td><?php echo  $row['nome']?></td>
                <td><?php echo  $row['rg']?></td>
                <td><?php echo  $row['cpf']?></td>
                <td><?php echo date("d/m/Y", strtotime($row['datanascli'])); ?></td>
                <td><?php echo  $row['endereco']?></td>
                <td><?php echo  $row['numeroCasa']?></td>
                <td><?php echo  $row['cidade']?></td>
                <td><?php echo  $row['uf']?></td>
                <td>
                <button type="button" class="btn btn-primary"
                 onclick="javascript: location.href = 'frmEdtCliente.php?id=' +<?php echo $row['id'] ?>" ><span class="fa fa-edit"></span></button>
                </td>
                <td>
                  <button type="button" class= "btn btn-danger"  onclick="javascript: location.href='frmRemCliente.php?id=' +
                  <?php echo $row['id']?>"><span class="fa fa-trash"></span></button>
                </td>
            </tr>
            <!-- Esta chave dentro de php fecha o foreach -->
                <?php } ?>     
        </table>

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
