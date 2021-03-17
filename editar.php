<?php include 'header.php';?>
<?php 
	include 'conexao.php';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = mysqli_query($connection, "SELECT * FROM questoes WHERE id=$id ");

    $count = (is_array($sql)) ? count($sql) :1 ;
		if ($count) {
			$n = mysqli_fetch_array($sql);
			$alternativa = $n['alternativa'];
			$nome = $n['nome'];
			$curso = $n['curso'];
			$data = $n['data'];

		}
	}
	
	if(isset($_POST['editar'])){
		$id = $_GET["id"];
		$nome = $_POST["nome"];
		$curso = $_POST["curso"];
		$data = $_POST["data"];
		$alternativa = $_POST['alternativa'];
		$alternativa_implode = implode(",", $_POST['alternativa']);
		$query = "UPDATE questoes SET alternativa = '$alternativa_implode', nome = '$nome', curso= '$curso', data = '$data' WHERE id = $id ";
	    
	    $consulta = mysqli_query($connection, $query);

	    header('location: tabela.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sistema Questões</title>
</head>
<body>

</div>

<div class="container col-md-6 offset-md-3">

<br>

<h2 align="center">Editar informações</h2>
<form  method="POST">
<input type="hidden" name="id" value="<?php echo $id; ?>">
 <div class="row">
    <div class="col">
      <input name="nome" type="text" class="form-control" value="<?php echo $nome; ?>"></input>
    </div>
    <div class="col">
    <select class="form-control" id="cursos" name="curso" required="">
      <option></option>
      <option value="Informática" <?=($curso == 'Informática')?'selected':''?> >Informática</option>
      <option value="Comércio" <?=($curso == 'Comércio')?'selected':''?> >Comércio</option>
      <option value="Enfermagem" <?=($curso == 'Enfermagem')?'selected':''?>>Enfermagem</option>
      <option value="Administração" <?=($curso == 'Administração')?'selected':''?>>Administração</option>
    </select>
    </div>
    <div class="col">
      <input name="data" type="date" class="form-control" value="<?php echo $data; ?>">
    </div>
 </div>

<div id="accordion">
  <h3>Questão 1</h3>
  <div>
    <p>
   	<h2>Questão 1</h2>
		    <legend>Marque uma alternativa: </legend>
		    <label>Letra A</label>
		    <input type="radio" name="alternativa[0]" value="letra-a" > <br>
		    <label>Letra B</label>
		    <input type="radio" name="alternativa[1]" value="letra-b" > <br>
		    <label>Letra C</label>
		    <input type="radio" name="alternativa[2]" value="letra-c" >
    </p>
  </div>
  <h3>Questão 2</h3>
  <div>
    <p>
    <h2>Questão 2</h2>
		    <legend>Marque uma alternativa: </legend>
		  <label>Letra A</label>
	      <input type="radio" name="alternativa[3]" value="letra-a"> <br>
	      <label>Letra B</label>
	      <input type="radio" name="alternativa[4]" value="letra-b"> <br>
	      <label>Letra C</label>
	      <input type="radio" name="alternativa[5]" value="letra-c">
    </p>
  </div>
  <h3>Questão 3</h3>
  <div>
    <p>
    <h2>Questão 3</h2>
		    <legend>Marque uma alternativa: </legend>
		    <label>Letra A</label>
		      <input type="radio" name="alternativa[6]" value="letra-a"> <br>
		      <label>Letra B</label>
		      <input type="radio" name="alternativa[7]" value="letra-b"> <br>
		      <label>Letra C</label>
		      <input type="radio" name="alternativa[8]" value="letra-c">
    </p>
  </div>
  <h3>Questão 4</h3>
  <div>
    <p>
   <h2>Questão 4</h2>
		    <legend>Marque uma alternativa: </legend>
		   <label>Letra A</label>
	      <input type="radio" name="alternativa[9]" value="letra-a"> <br>
	      <label>Letra B</label>
	      <input type="radio" name="alternativa[10]" value="letra-b"> <br>
	      <label>Letra C</label>
	      <input type="radio" name="alternativa[11]" value="letra-c">
    </p>
  </div>
</div> 
<br>
	<button name="editar" type="submit" class="btn btn-primary col-md-6 offset-md-3 ">Atualizar</button>
</form>
<br>

<a href="tabela.php">
	<button name="done" type="submit" class="btn btn-danger col-md-6 offset-md-3 ">Cancelar</button>
</a>
</div>

</div>

</body>
</html>
