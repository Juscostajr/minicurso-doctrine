<?php
require_once 'config.php';
require_once 'src/PessoaFisica.php';
require_once 'src/PessoaFisicaController.php';

$pessoaFisicaController = new PessoaFisicaController($entityManager);

if ($_POST) {
    $pessoaFisicaController
        ->create(
            $_POST['nome'],
            $_POST['cpf'],
            $_POST['dataNascimento']
        );
}

$pessoas = $pessoaFisicaController->list();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoas</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #F4F4F4;
            color: #333333;
            padding: 20px;
        }
        h2 {
            font-size: 24px;
            font-weight: 500;
            color: #33691E;
            margin-bottom: 20px;
        }
        form {
            background-color: #FFFFFF;
            border-radius: 4px;
            padding: 20px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        form label {
            font-size: 16px;
            font-weight: 500;
            color: #333333;
            margin-bottom: 10px;
        }
        form input[type="text"],
        form input[type="date"] {
            width: 100%;
            height: 40px;
            border: 1px solid #CCCCCC;
            border-radius: 4px;
            padding: 10px;
            font-size: 16px;
            color: #333333;
            margin-bottom: 20px;
            transition: border-color 0.2s ease-in-out;
        }
        form input[type="text"]:focus,
        form input[type="date"]:focus {
            border-color: #33691E;
        }
        form input[type="submit"] {
            background-color: #33691E;
            color: #FFFFFF;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s ease-in-out;
        }
        form input[type="submit"]:hover {
            background-color: #558B2F;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #FFFFFF;
            border-radius: 4px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        table th {
            background-color: #33691E;
            color: #FFFFFF;
            font-size: 16px;
            font-weight: 500;
            text-align: left;
            padding: 10px;
            border: none;
        }
        table td {
            font-size: 16px;
            color: #333333;
            padding: 10px;
            border: none;
            border-top: 1px solid #CCCCCC;
        }
    </style>
</head>
<body>
    <h2>Cadastro</h2>

    <form method="POST">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Cpf</label>
        <input type = "text" name="cpf">
<label>Data de Nascimento</label>
<input type="date" name="dataNascimento">
<input type="submit">
</form>
<h2>Consulta</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Cpf</th>
        <th>Data de Nascimento</th>
    </tr>
    <?php foreach ($pessoas as $pessoa): ?>
    <tr>
        <td>
            <?=$pessoa->getId()?>
        </td>
        <td>
            <?=$pessoa->getNome()?>
        </td>
        <td>
            <?=$pessoa->getCpf()?>
        </td>
        <td>
            <?=$pessoa->getDataNascimento()->format('d/m/Y')?>
        </td>
    </tr>
    <?php endforeach?>
</table>
</body>
</html>

