<?php

try {
    $conn = new PDO('mysql:host=localhost;dbname=real_estate','root','');
} catch (PDOException $exception) {
    die($exception->getMessage());
}

$sql = "SELECT * FROM users";
$st = $conn
    ->query($sql);

if ($st) {
    $rs = $st->fetchAll(PDO::FETCH_FUNC, fn($id, $name, $last_name) => [$id, $name, $last_name] );

    echo json_encode([
        'data' => $rs,
    ]);
} else {
    var_dump($conn->errorInfo());
    die;
}
?>