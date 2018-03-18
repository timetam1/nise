<?php
print $_GET["id"];
try {
    $dbh = new PDO('mysql:host=localhost;dbname=nisetui', 'root', 'root');
    $sql = "INSERT INTO member (name) VALUES ($name)";
    $stmt = bindValue($name,$_GET["id"]);
    $stmt = $dbh->prepare($sql);
    $stmt->execute();
    print "データを入れたよ";
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
}

?>
