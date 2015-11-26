<?php
  $data = array(
    array('', '東京都', '29歳'),
    array('田中', '千葉県', '31歳'),
    array('鈴木', '北海道', '54歳')
  );
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=data.csv');
  $stream = fopen('php://output', 'w');
  foreach($data as $row){
    fputcsv($stream, $row);
  }

// 参考サイト
  // http://codaholic.org/?p=1800
