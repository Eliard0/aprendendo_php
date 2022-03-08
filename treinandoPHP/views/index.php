<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="./../styles/index.sass">
    <title>Document</title>
</head>


<body>
    <h1 class="text-center">treinando php</h1>
    <section>
        <div class="container-fluid">
            <div class="card pl-2 pr-2 pb-3 pt-3 border">
                <form name="formulario" method="POST" action="listProducts.php">
                    <?php
                    session_start();
                    $_SESSION["product"] = array("arroz", "feijao", "carne");
                    $json = json_encode($product);
                    ?>
                    <div class="form-group">
                        <label>Informe um produto novo</label>
                        <input type="text" name="array[]" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Preço do Produto</label>
                       <input type="number" name="array[]" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary rounded-pill">Ver produtos na proxima pagina</button>
                    <input type="hidden" name="array[]" >
                </form>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>

</html>