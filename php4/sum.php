<?php
// Q1 引数に数値を指定して実行すると、数値を2倍にして返す関数
function mul($max) {
    return $max*=2;
}
echo mul(4);
?>

<?php
// Q2 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数
function sum($a,$b){
    return $a+$b;
}
echo sum(2,5)
 ?>

<?php
/*　Q3　$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数 */
$arr = array(1,3,5,7,9);
echo array_product($arr)

 ?>

<?php
// Q5 strip_tagsの用途…文字列からHTMLおよびPHPタグを取り除く
$strip = "abc<br>";
echo $strip;
echo strip_tags($strip)
 ?>

 <?php
 //Q5array_pushの用途…要素を配列の最後に追加
 $stack = ["dog", "cat"];
 array_push($stack, "rabbit", "pig");
 print_r($stack);
 ?>

<?php
//Q5 array_mergeの用途…配列の結合
$arr = ["dog","cat","pig"];
$arr2 =["zebra","rabbit","giraffe"];

$array = array_merge($arr, $arr2);

print_r($array);
?>


<?php
//Q5time…現在のタイムスタンプ　mktime…指定したタイムスタンプの取得
echo time();
echo "\n";
echo mktime(0,0,0);
 ?>

 <?php
 //Q5 date…日付の取得
 echo date('Y/m/d H:i:s');
  ?>
