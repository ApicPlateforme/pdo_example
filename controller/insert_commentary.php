<?php
require_once '../config/db.php';
require_once '../models/users.php';
require_once '../models/messages.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim($_POST['name'] ?? '');
    $email   = trim($_POST['email'] ?? '');
    $content = trim($_POST['content'] ?? '');

    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $content) {
        $userId = find_or_create_user($pdo, $name, $email);
        insert_message($pdo, $userId, $content);
        header('Location: ../index.php');
        exit;
    } else {
        header('Location: ../pages/commentary.php?error=1');
        exit;
}
}