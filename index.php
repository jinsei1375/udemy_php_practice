<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php

$array = [1,2,3];
echo $array[1];
echo '<pre>';
var_dump($array);
echo '</pre>';

$array_2 = [
  ['red', 'blue', 'yellow'],
  ['grenn', 'brown']
];
echo '<pre>';
var_dump($array_2);
echo '</pre>';
echo $array_2[0][1];

$array_member = [
  'ホンダ' => [
    'height' => 170,
    'hobby' => 'サッカー'
  ],
  '香川' => [
    'height' => 160,
    'hobby' => '音楽'
  ]
];
echo $array_member['ホンダ']['hobby'];
echo '<pre>';
var_dump($array_member);
echo '</pre>';
echo $test;
phpinfo();
?>
  
</body>
</html>