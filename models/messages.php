<?php

function insert_message(PDO $pdo, int $userId, string $content): void {
    try {
        $stmt = $pdo->prepare("INSERT INTO messages (user_id, content) VALUES (:user_id, :content)");
        $stmt->bindValue(':user_id', $userId, PDO::PARAM_INT);
        $stmt->bindValue(':content', $content, PDO::PARAM_STR);
        $stmt->execute();
    } catch (PDOException $e) {
        die("Erreur lors de l'insertion du message : " . $e->getMessage());
    }
}

function get_all_messages(PDO $pdo): array {
    try {
        $sql = "SELECT m.content, m.created_at, u.name 
                FROM messages m
                JOIN users u ON m.user_id = u.id
                ORDER BY m.created_at DESC";
        $stmt = $pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        die("Erreur lors de la récupération des messages : " . $e->getMessage());
    }
}