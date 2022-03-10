<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./../styles/listProducts.sass">
    <link rel="import" href="./index.php">
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Produtos</h1>
    <section>
        <div class="container-fluid d-flex justify-content-center">
            <div class="row">
                <div class="col text-center mt-5">
                    <div class="card border-card" style="width: 18rem;">
                        <div class="card-body">
                            <?php
                            include_once('banco.php');

                            session_start();
                            $nameProduct = isset($_POST['product']) ? $_POST['product'] : "";
                            echo "produto: $nameProduct<br />";

                            $priceProduct = isset($_POST['productPrice']) ? $_POST['productPrice'] : "";
                            //echo "Preço do produto: $priceProduct Reais <br>";

                            //$prod = $_SESSION["product"];

                            //foreach ($prod as $values) {
                            //  echo "dados do array: $values<br>";
                            //}

                            $con = new banco();

                            $sql = " INSERT INTO products (product, price) VALUES ('$nameProduct', '$priceProduct')";
                            
                            if (mysqli_query($con->getDB(), $sql)) {
                                echo "dados inseridos no banco:";
                            } else {
                                echo "Error: " . $sql . "<br>" . mysqli_error($con->getDB());
                            }

                            $query = " SELECT id, product, price FROM products ";

                            $buscaDado = mysqli_query($con->getDB(), $query)  or die("nao foi possivel buscar os dados");

                            $linha = mysqli_fetch_assoc($buscaDado);

                            $total = mysqli_num_rows($buscaDado);

                            mysqli_close($con->getDB());
                            ?>
                            <?php
                            if ($total > 0) {
                                do {
                            ?>
                                    <p class="text-left"><?= $linha['id'] ?>: <?= $linha['product'] ?> preço: <?= $linha['price'] ?></p>
                            <?php
                                } while ($linha = mysqli_fetch_assoc($buscaDado));
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

    </section>
</body>

</html>