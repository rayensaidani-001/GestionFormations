<?php

require_once 'Database.php';

class Formation {

    public static function getAll(): array {

        $pdo = Database::connect();

        $stmt = $pdo->query(
            'SELECT * FROM formations ORDER BY id DESC'
        );

        return $stmt->fetchAll();
    }

    public static function getById($id): array|false {

        $pdo = Database::connect();

        $stmt = $pdo->prepare(
            'SELECT * FROM formations WHERE id = ?'
        );

        $stmt->execute([$id]);

        return $stmt->fetch();
    }
}
?>