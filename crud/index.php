<?php
    $title = "資料清單";

    // 引入資料庫連線
    require_once 'db_connection.php';

    // 查詢資料
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
    $sql = "SELECT * FROM item WHERE name LIKE '%{$keyword}%' ORDER BY id DESC";
    $sth = $pdo->prepare($sql);
    $sth->execute();
    $items = $sth->fetchAll();
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $title ?></title>
    <link rel="stylesheet" href="main.css" type="text/css" />
</head>
<body>
    <h1><?php echo $title ?></h1>

    <!-- 關鍵字查詢輸入框 -->
    <form action="" method="get">
        <input type="text" value="<?php echo $keyword ?>" name="keyword">
        <input type="submit" value="搜尋">
    </form>

    <!-- 新增按鈕 -->
    <p><a href="edit.php?id=0">新增</a></p>

    <!-- 資料表格 -->
    <table>
        <tr>
            <th>編號</th>
            <th>名稱</th>
            <th>價格</th>
            <th>操作</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td><?php echo $item['price'] ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $item['id'] ?>">編輯</a>
                    <a href="delete.php?id=<?php echo $item['id'] ?>">刪除</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>