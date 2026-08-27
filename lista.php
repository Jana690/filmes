<html>
	    <head>
			   <title>lista de filmes</title>
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>
<body class="row">
	    <div class="col l12">
			   <div class="col l4" "card-panel teal lighten-2"
			   <div class="col l8">Direita</div>
        </div>
    </body>
</html


	div class="col 18 main">
			<h2>Filmes Cadastrados</h2>
			<form action="gravar.php">
				<input type="text" name="name" placeholder="nome do Filme...">
				<input type="text" name="categoria" placeholder="Categoria...">
				<<input type="text" name="lancamento" placeholder="Ano do lancamento">
				<input type="text" name="avaliado" placeholder="avaliação do filme">
				i<nput type="submit" value="salvar" name="salvar">
			</form>
         </div>
       </div>
</body>
</html>
<?php
	$nome = $_POST['nome'];
	$categoria = $_POST['categoria'];
	$lancamento = $_POST['lancamento'];
	$avaliacao = $_POST['avaliacao'];

	$sql = "INSERT INTO filmes (nome, categoria, lancamento, avaliacao)
		values ($nome, $categoria, $lancamento, $avaliacao)";

		$resultado = $conn->query($sql);

		if($resultado == 1){
			echo "gravou com sucesso!";
		}else{
			echo "nao gravou";
		}

<$php
include("conexao.php");

$sql = "SELECT * FROM filme";
$resultado = $conn->query(sql);

while(4filme = $resultado->fetch_assoc()){
	echo 4sfilme['titulo'];
}
