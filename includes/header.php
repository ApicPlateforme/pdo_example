<?php require_once __DIR__ . '/../config/config.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
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