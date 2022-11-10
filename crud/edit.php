<?php
    // 引入資料庫連線
    require_once 'db_connection.php';

    // 透過編號判斷是新增 or 修改
    $id = 0;
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
    }

    $item = [];
    if ($id > 0) { // 修改
        // 取得欲修改的資料
        $sql = "SELECT * FROM item WHERE id = :id";
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $item = $sth->fetch();
        $post_url = 'update.php';
        $title = "編輯項目";
    } else { // 新增
        $post_url = 'add.php';
        $title = "新增項目";
    }
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
    <h1><?php echo $title ?></h1>

    <form action="<?php echo $post_url; ?>" method="post">
        <input type="hidden" name="id" value="<?php echo isset($item['id']) ? $item['id'] : '' ?>">
        名稱：<input type="text" name="name" value="<?php echo isset($item['name']) ? $item['name'] : '' ?>"><br>
        價格：<input type="number" name="price" value="<?php echo isset($item['price']) ? $item['price'] : '' ?>"><br>
        <input type="submit" value="提交">
    </form>

    <a href="index.php">返回</a>
</body>
</html>