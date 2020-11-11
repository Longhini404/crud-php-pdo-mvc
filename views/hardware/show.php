<?php

use App\Model\Hardware;

require_once '../../vendor/autoload.php';

$hardware = new \App\Model\Hardware();
$hardwares = $hardware->select();

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
                    Anúncios | Hardware
                </h4>
            </div>
        </div>

        <div class="row mt-6 justify-content-center">
            <a class="btn btn-green" href="form-add.php">Cadastrar Hardware</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Categoria</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hardwares as $hardware) : ?>
                    <tr>
                        <td><?php echo $hardware['titulo'] ?></td>
                        <td>R$ <?php echo $hardware['preco'] ?></td>
                        <td><?php echo $hardware['categoria'] ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="form-edit.php?id_hardware=<?php echo $hardware['id_hardware'] ?>">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm" href="delete.php?id_hardware=<?php echo $hardware['id_hardware'] ?>">Deletar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>

    <script src="../../assets/js/vendor.js"></script>
    <script src="../../assets/js/app.js"></script>

</body>

</html>