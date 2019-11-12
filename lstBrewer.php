<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Listar Cervejas</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body class="container">
        <h1>Listar Cervejas</h1>
        <table class="table table-striped table-hover">
            <tr>
                <th>ID</th>
                <th>SKU</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Teor Alcoolico</th>
                <th>Sabor</th>
                <th>Pais Origem</th>
                <th>Quantidade Estoque</th>
                <th>Valor</th>
            </tr>
            <!-- conexão no banco  -->
            <?php
                include 'banco.php';
                $pdo = Banco::conectar();
                $sql = 'select * from cerveja  order by descricao';
                // para cada registro da tabela
                foreach($pdo->query($sql)as $row){
            ?>
            <tr>
                <td><?php echo  $row['id']?></td>
                <td><?php echo  $row['sku']?></td>
                <td><?php echo  $row['nome']?></td>
                <td><?php echo  $row['descricao']?></td>
                <td><?php echo  $row['teoralcoolico']?></td>
                <td><?php echo  $row['sabor']?></td>
                <td><?php echo  $row['origen']?></td>
                <td><?php echo  $row['qtdeEstoque']?></td>
                <td><?php echo  $row['valor']?></td>
            </tr>
            <!-- Esta chave dentro de php fecha o foreach -->
                <?php } ?>     
        </table>
        
        <script src="" async defer></script>
    </body>
</html>