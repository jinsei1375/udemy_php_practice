<?php
// パスワード記録したファイルの場所
// echo __FILE__;
// パスワード（暗号化）
// echo password_hash('password123', PASSWORD_BCRYPT);

$contactFile = '.contact.dat';

// ファイル丸ごと読み込み
$fileContents = file_get_contents($contactFile);

$contents = fopen($contactFile, 'a+');

$addText = "\n" . '追記';

fwrite($contents, $addText);

fclose($contents);



// ファイル上書き
// file_put_contents($contactFile, 'テストです');


// ファイル追記
// file_put_contents($contactFile, $addText, FILE_APPEND);


// svc形式ファイル
// $allData = file($contactFile);
// foreach($allData as $lineData) {
//   $line = explode(',', $lineData);
//   echo $line[0];
//   echo '<br>';
//   echo $line[1];
//   echo '<br>';
//   echo $line[2];
//   echo '<br>';
// }

?>