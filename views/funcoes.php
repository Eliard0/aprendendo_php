<?php

include_once('banco.php');

 $con = new banco();

//$sql = " INSERT INTO products (product, price) VALUES ('$nameProduct', '$priceProduct')";

mysqli_query($con->getDB(), $sql) or die("Erro ao tentar cadastrar registro");
echo "cadastrado com sucesso!";

if (mysqli_query($con->getDB(), $sql)) {
    echo "dados inseridos";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con->getDB());
}

//$query = " SELECT product, price FROM products ";

$buscaDado = mysqli_query($con->getDB(), $query)  or die("nao foi possivel buscar os dados");

$linha = mysqli_fetch_assoc($buscaDado);

$total = mysqli_num_rows($buscaDado);

mysqli_close($con->getDB());
?>