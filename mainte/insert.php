<?php

// DB接続　PDO
function insertContact($request){


  require 'db_connection.php';

  // 入力　DB保存



  $params = [
    'id' => null,
    'your_name' => $request['your_name'],
    'email' => $request['email'],
    'url' => $request['url'],
    'gender' => $request['gender'],
    'age' => $request['age'],
    'contact' => $request['contact'],
    'created_id' => null
  ];

  $count = 0;
  $columns = '';
  $values = '';

  foreach(array_keys($params) as $key) {
    if($count++>0) {
      $columns .= ',';
      $values .= ',';
    }
    $columns .= $key;
    $values .= ':'.$key;
  }

  $sql = 'insert into contacts ('. $columns .' )values('. $values .')';

  // var_dump($sql);

  // プリペアステートメント
  $stmt = $pdo->prepare($sql);
  // 実行
  $stmt->execute($params);
};