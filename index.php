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
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Cadastro</h2>

    <form method="POST">
        <label>Nome</label>
        <input type="text" name="nome">
        <label>Cpf</label>
        <input type="text" name="cpf">
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
        <?php foreach ($pessoas as $pessoa) : ?>
            <tr>
                <td>
                    <?= $pessoa->getId() ?>
                </td>
                <td>
                    <?= $pessoa->getNome() ?>
                </td>
                <td>
                    <?= $pessoa->getCpf() ?>
                </td>
                <td>
                    <?= $pessoa->getDataNascimento()->format('d/m/Y') ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>