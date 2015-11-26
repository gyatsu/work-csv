<?php
  $data = array(
    array('社員数', '売上合計', '売上平均'),
    array('3', '1800', '600'),
  );
  header('Content-Type: application/octet-stream');
  header('Content-Disposition: attachment; filename=data.csv');
  $stream = fopen('php://output', 'w');
  foreach($data as $row){
    fputcsv($stream, $row);
  }