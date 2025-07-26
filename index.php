<?php
$title = "Accueil";
// $css = "" ;
require_once './config/db.php';
require_once './models/messages.php';
require_once './includes/header.php';


$messages = get_all_messages($pdo);

?>

<main>
    <h1><?= $title ?></h1>
    <?php foreach ($messages as $msg): ?>
        <div class="message">
            <p><?= nl2br(htmlspecialchars($msg['content'])) ?></p>
            <small>
                Écrit par <?= htmlspecialchars($msg['name']) ?> 
                le <?= date('d/m/Y H:i', strtotime($msg['created_at'])) ?>
            </small>
        </div>
    <?php endforeach; ?>
</main>

<?php require_once './includes/footer.php'; ?>