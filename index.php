<?php
$title = "Accueil";
$css = "index.css";
$active = 1;
require_once './config/db.php';
require_once './models/messages.php';
require_once './includes/header.php';

$messages = get_all_messages($pdo);

?>

<main class="main-content">
    <h1>Mon livre d'or</h1>
    <?php if (!empty($messages)): ?>
    <?php foreach ($messages as $msg): ?>
        <div class="message">
            <p><?= nl2br(htmlspecialchars($msg['content'])) ?></p>
            <small>
                Écrit par <?= htmlspecialchars($msg['name']) ?>
                le <?= date('d/m/Y H:i', strtotime($msg['created_at'])) ?>
            </small>
        </div>
    <?php endforeach; ?>
    <?php else: ?>
         <div class="message">
            <p>Aucun message pour le moment. Soyez le premier à en écrire un !</p>
        </div>
    <?php endif; ?>
</main>

<?php require_once './includes/footer.php'; ?>