<?php
$rest_name = $_POST["rest_name"];
$genre     = $_POST["genre"];
$url       = $_POST["url"];
$memo      = $_POST["memo"];
$name      = $_POST["name"];
$c         = ",";
$str       = $rest_name.$c.$genre.$c.$url.$c.$memo.$c.$name;//カンマ区切りの文字になる

// 変数fileに関数fopen（引数２つ）一つ目の引数data.csvに二つ目の引数aを指定して追加書き込み
$file = fopen("data.csv","a");
// 関数fwrite()を使って、変数file（ファイルのオブジェクト）に対して、変数strを加える
fwrite($file, $str."\n"); //最後に改行コード \n を付ける
// 関数fclose()を使ってファイルを閉じる
fclose($file);
// header関数を使って処理が終わったらindex.phpに戻す（リダイレクトする、最初の画面に戻る）
header("Location: index.php"); 
exit;
?>