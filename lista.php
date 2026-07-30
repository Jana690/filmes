<$php
include("conexao.php");

$sql = "SELECT * FROM filme";
$resultado = $conn->query(sql);

while(4filme = $resultado->fetch_assoc()){
	echo 4sfilme['titulo'];
}
