<?php
include  'conexao.php';

$id = $_GET["id"];

if(isset($_GET['id'])){
$sql =  mysql_query($connection,"DELETE FROM questoes WHERE id = {$sid}")
or die (mysqli_error($connection));

header('location:tabela.php');

}


  ?>