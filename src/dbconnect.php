<?php
/* ドライバ呼び出しを使用して MySQL データベースに接続する */
$dsn = 'mysql:dbname=posse;host=db';
$user = 'root';
$password = 'root';

$dbh = new PDO($dsn, $user, $password);

$sql = 'SELECT * FROM questions';
foreach ($dbh->query($sql) as $row) {
    print $row['id'] . "\t";
    print $row['content'] . "\t";
}

// var_dump いらなくない？？

?>