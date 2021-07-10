<?php
include("./ligacao.ini");

$name = $_GET['nome'];
$ultimo = $_GET['ultimo'];
$escola = $_GET['escola'];
$texto = $_GET['texto'];



  $query= mysqli_query($conn,"INSERT INTO utilizadores (primeiro,ultimo,escola,texto)
VALUES ('$name','$ultimo','$escola','$texto')");
if($query){
		header("Location: ./index.php");

	}

?>
