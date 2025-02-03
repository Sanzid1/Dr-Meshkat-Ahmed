<?php
require_once 'db_connect.php';

function sanitizeInput($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function getCategories() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM categories");
    return $stmt->fetchAll();
}
function validateUrlSegment($segment) {
    return preg_match('/^[a-zA-Z0-9-_]+$/', $segment);
}
?>