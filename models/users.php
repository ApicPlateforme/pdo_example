<?php

function get_user_by_email(PDO $pdo, string $email): ?array {
    try {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    } catch (PDOException $e) {
        die("Erreur lors de la récupération de l'utilisateur : " . $e->getMessage());
    }
}

function create_user(PDO $pdo, string $name, string $email): int {
    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        return (int)$pdo->lastInsertId();
    } catch (PDOException $e) {
        die("Erreur lors de la création de l'utilisateur : " . $e->getMessage());
    }
}

function find_or_create_user(PDO $pdo, string $name, string $email): int {
    $user = get_user_by_email($pdo, $email);
    if ($user) {
        return (int)$user['id'];
    }
    return create_user($pdo, $name, $email);
}