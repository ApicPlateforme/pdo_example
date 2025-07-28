<?php
$title = "Ajouter un commentaire";
$css = "commentary.css";
$active = 2;
require_once '../includes/header.php';
?>

<main class="main-content">
    <h1><?= $title ?></h1>
    <?php if (isset($_GET['error'])): ?>
        <p class="error">Tous les champs sont obligatoires et l’email doit être valide.</p>
    <?php endif; ?>

    <form method="post" action="../controller/insert_commentary.php">
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>

        <label for="content">Message :</label>
        <textarea name="content" id="content" required></textarea>
        
        <div class="submit-btn">
            <button type="submit">Envoyer</button>
        </div>
    </form>
</main>

<?php require_once '../includes/footer.php'; ?>