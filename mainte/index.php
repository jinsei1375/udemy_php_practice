<?php

require 'db_connection.php';

// ユーザー入力なし query
// $sql = 'select * from contacts where id = 2';
// $stmt = $pdo->query($sql);

// $result = $stmt->fetchAll();


// ユーザー入力あり prepare bind execute
// 名前付きプレースホルダー
$sql = 'select * from contacts where id = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue('id', 1, PDO::PARAM_INT);
$stmt->execute();

$result = $stmt->fetchAll();

echo '<pre>';
var_dump($result);
echo '</pre>';

// トランザクション　まとまって処理 beginTransaction, commit, rollback

$pdo->beginTransaction();

try{
  // sql処理
  $sql = 'select * from contacts where id = :id';
  $stmt = $pdo->prepare($sql);
  $stmt->bindValue('id', 1, PDO::PARAM_INT);
  $stmt->execute();
  $pdo->commit();
}catch(PDOException $e) {
  // 更新キャンセル
  $pdo->rollback();
}

