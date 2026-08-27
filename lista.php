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
	

<$php
include("conexao.php");

$sql = "SELECT * FROM filme";
$resultado = $conn->query(sql);

while(4filme = $resultado->fetch_assoc()){
	echo 4sfilme['titulo'];
}
