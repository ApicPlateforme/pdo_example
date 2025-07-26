<?php require_once __DIR__ . '/../config/config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mini site PHP d'exemple sans JavaScript, avec PDO et bonnes pratiques.">
    <link rel="icon" href="<?= BASE_URL ?>assets/img/livreor.png" type="image/png">
    <title><?= $title ?? "Livre d'or" ?></title>

    <!-- CSS commun à toutes les pages -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/css/common.css">

    <!-- CSS spécifique à la page, si défini -->
    <?php if (!empty($css)): ?>
        <link rel="stylesheet" href="./assets/css/<?= $css ?>">
    <?php endif; ?>
</head>
<body>

<header>
    <nav>
            <a href="<?= BASE_URL ?>index.php">Accueil</a> | 
            <a href="<?= BASE_URL ?>pages/commentary.php">Ajouter un commentaire</a>
    </nav>
</header>