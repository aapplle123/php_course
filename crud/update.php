<?php
    // 引入資料庫連線
    require_once 'db_connection.php';

    // 取得參數
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];

    // 更新資料
    $sql = "UPDATE item SET `name` = :name, `price` = :price WHERE `id` = :id";
    $sth = $pdo->prepare($sql);
    $sth->bindParam(':id', $id);
    $sth->bindParam(':name', $name);
    $sth->bindParam(':price', $price);
    $sth->execute();

    // 取得異動資料比數
    $count = $sth->rowCount();

    $title = '資料修改完成';
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
    <h1><?php echo $title ?></h1>

    <a href="index.php">更新<?php echo $count ?>筆記錄，返回</a>
</body>
</html>