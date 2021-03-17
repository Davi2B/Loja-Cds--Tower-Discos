<?php include 'header.php'; ?>
<?php include 'conexao.php'; ?>
<?php include 'listar.php'; ?>

<html>
<head>
  <title>Gabaritos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body>
  <br><br><br><br>  

<div class="container">
  <h3>Listas de Gabaritos</h3>
<table class="table table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Alternativa</th>
      <th>Nome</th>
      <th>Curso</th>
      <th>Data</th>
      <th>Ações</th>
    </tr>
  </thead>
  <?php while ($questoes = mysqli_fetch_assoc($sql)) { ?>
    <tbody>
    <tr>
      <th><?php echo $questoes['id'];?></th>
      <td><?php echo $questoes['alternativa'];?></td>
      <td><?php echo $questoes['nome'];?></td>
      <td><?php echo $questoes['curso'];?></td>
      <td><?php echo $questoes['data'];?></td>
      <td>
        <a href="" class="btn btn-sm btn-warning">Editar</a>
        <a href="deletar.php?id=<?php echo $questoes['id'];?>" class="btn btn-sm btn-danger" >Deletar</a>
      </td>
    </tr>    
  </tbody>
<?php }?>
</table>
<a class="btn btn-sm btn-primary" href="index.php">Voltar</a>
</div>
</body>
</html>