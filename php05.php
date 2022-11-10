<h1>PHP 05</h1>
<?php
    echo "HTTP請求方法：{$_SERVER['REQUEST_METHOD']}<br>";
    echo "請求參數：<br/>";
    print_r($_GET);
    echo "<br>";
    var_dump($_GET);
?>