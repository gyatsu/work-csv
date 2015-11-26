<?php
$count_origin = count(file("sales.csv"));
$count = $count_origin-1;

$sales_sum = 0;
$fp = fopen("sales.csv", "r");
while ($data = fgetcsv($fp, 10000)) {
  $sales = $data[1];
  $sales_sum += $sales;
}

$sales_ave = $sales_sum/$count;
echo "社員数: ".$count."\n";
echo "売上合計: ".$sales_sum."\n";
echo "売上平均: ".$sales_ave."\n";

