<?php

use App\Model\Hardware;
use App\Helper\Helpers;

require_once '../../vendor/autoload.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastrar Hardware</title>
    <link rel="stylesheet" href="../../assets/css/vendor.css" />
    <link rel="stylesheet" href="../../assets/css/style.css" />

</head>

<body class="bg-dark text-white">
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                <img src="../../assets/images/UpgradeGamerBrand.png">
            </div>
        </div>
    </div>

    <div class="container">

        <div class="mt-4">
            <div class="text-center">
                <h4>
                    Cadastrar Hardware
                </h4>
            </div>
        </div>

        <!-- FORM -->
        <form class="needs-validation" action="../../controllers/hardware/hardware.php" method="post" novalidate autocomplete="none">
            <input name="method" value="salvar" hidden>

            <!-- Título -->
            <div class="row mt-2">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for=""><b>Título:</b></label>
                        <input class="form-control" type="text" name="titulo" required autocomplete="none">
                    </div>
                </div>

                <!-- Preço -->
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for=""><b>Preço:</b></label>
                        <input class="form-control" type="text" name="preco" required autocomplete="none">
                    </div>
                </div>
            </div>

            <!-- Descrição -->
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for=""><b>Descrição:</b></label>
                        <textarea class="form-control" type="text" name="descricao" required autocomplete="none"></textarea>
                    </div>
                </div>

                <!-- Categoria -->
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="categoria">Categoria:</label>
                        <select class="form-control" name="categoria">
                            <option>Processador</option>
                            <option>Placa Mãe</option>
                            <option>Placa de Vídeo</option>
                            <option>Memória Ram</option>
                            <option>Armazenamento</option>
                            <option>Fonte de Alimentação</option>
                            <option>Resfriamento</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-center">
                    <button class="btn btn-success btn-lg" type="submit" name="button">Confirmar</button>
                </div>
            </div>
    </div>

    </form>

    <script src="../../assets/js/vendor.js"></script>
    <script src="../../assets/js/app.js"></script>

</body>

</html>