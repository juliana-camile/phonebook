<?php
    include_once("config/url.php");
    include_once("config/connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phonebook</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
                <img src="<?= $BASE_URL ?>img/icone.png" alt="phonebook">
            </a>

            <div>
                <div class="navbar-nav">
                    <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                    <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>