<?php

// echo "# 配列の値の合計を計算\n";
// $a = array(1, 2, 3, 4, 5, 6, 7, 8.1, 9.2);
// echo array_sum($a)."\n";

$sales_sum = 0;
$fp = fopen("sales.csv", "r");
while ($data = fgetcsv($fp, 10000)) {
  $sales = $data[1];
  $sales_sum += $sales;
}
echo $sales_sum."\n";





// $fp = fopen("sales.csv", "r");
// while ($data = fgetcsv($fp, 10000)) {
//   foreach ($data as $d) {
//     echo $d.",";
//   }
//   echo "\n";
// }










// $fp = fopen("sales.csv", "r");
// for( $count = 0; fgets( $fp ); $count++ ){
//   echo $count;
// }


// $fp = fopen("sales.csv", "r");
// while ($data = fgetcsv($fp, 10000)) {
//   foreach ($data as $d) {
//     echo $d.":\n";
//   }
// }




// #### 基本要件(必須)
// 下記のようなCSV形式の売上データが与えられている。
// このCSVファイルを読み込んで、社員数、売上合計、売上平均を出力せよ。

// #### 応用要件
// 上記の出力結果を"report.csv"というファイル名で出力せよ。

// ```csv:sales.csv
// 社員名,売上
// Kashiwagi,1000
// Hidaka,500
// Ohira,300
// ```

// ```実行結果
// // 画面表示結果
// 社員数: 3
// 売上合計: 1800
// 売上平均: 600
// ```

// ```csv:report.csv
// 社員数,売上合計,売上平均
// 3,1800,600
// ```