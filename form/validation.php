<?php 

function validation($request) {
  $errors = [];

  if(empty($request['your_name']) || 20 < mb_strlen($request['your_name'])) {
    $errors[] = '氏名は20文字以内で入力してください';
  }

  if(empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'メアドは必須だよ。正しい形式で！';
  }

  if(!empty($request['url']) && !filter_var($request['url'], FILTER_VALIDATE_URL)) {
    $errors[] = 'ホームページは正しい形式で入寮してね';
  }
  
  if(!isset($request['gender'])) {
    $errors[] = '性別は必須です';
  }
  
  if(empty($request['age']) || 6 < $request['age'] ) {
    $errors[] = '年齢を選択してください';
  }
  
  if(empty($request['contact']) || 200 < mb_strlen($request['contact'])) {
    $errors[] = 'お問い合わせは必須だよ。200文字以内で入力してください';
  }

  if(empty($request['caution'])) {
    $errors[] = 'プラポリ確認してね';
  }

  return $errors;
}

?>



