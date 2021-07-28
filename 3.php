<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>you must do homework.</title>
<style type="text/css">
.result{
    font-size:2em;
    width: 20em;
    margin: 0;
}
</style>
</head>
<body>
<h1>作文bot</h1>
<?php
$A = array(
    "I",
    "You",
    "He",
    "She",
    "We",
    "They");
$B = array(
    "do ",
    "finish ",
    "trash ",
    "burn ",
    "break ");
$C = array(
    "homework",
    "work",
    "a task",);

$num_of_A = count($A);
$num_of_B = count($B);
$num_of_C = count($C);

$result_A = rand(0,$num_of_A-1);
$result_B = rand(0,$num_of_B-1);
$result_C = rand(0,$num_of_C-1);

echo "<div class=\"result\">".$A[$result_A]." must ".$B[$result_B].$C[$result_C]."."."</div>";
?>
<a href="3.php">別のパターン</a>
</body>
</html>
