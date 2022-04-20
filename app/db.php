<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=web_noticias';
$username = 'root';
$password = '';
$options = [];

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    print "<center><h1 style='color: red; margin-top: 300px;'> Deconectado a la base de datos 🛑❌ </h1></center> <br>" . $e->getMessage() . "";
}

if ($db) {
    echo "<center><h1 style='color: green; margin-top: 300px;'> Conectado a la base de datos ✅ </h1></center>";
}

$pdo = new PDO($dsn, $username, $password, $options);

?>