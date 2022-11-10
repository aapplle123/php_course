<?php
    // 資料庫連線設定
    $hostname = "localhost";
    $username = 'root';
    $password = '';
    $db_name = "sample";
    $dsn = sprintf('mysql:host=%s;dbname=%s;', $hostname, $db_name);
    $option = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    $pdo = new PDO($dsn, $username, $password, $option);
?>