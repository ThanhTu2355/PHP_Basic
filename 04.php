<?php
// Kiểm tra và so sánh biến $a1 và $a2
$a1 = 10;
$a2 = 5;
//Cấu trúc 1
if ($a1 > $a2) {
    echo "$a1 lớn hơn $a2";
} else {
    echo "$a1 bé hơn hoặc bằng $a2";
}

echo "<br>";    

//Cấu trúc 2

$n = -3;

if ($n < 0) {
    echo "$n nhỏ hơn 0";
} elseif ($n < 6) {
    echo "$n nhỏ hơn 6";
} elseif ($n < 10) {
    echo "$n nhỏ hơn 10";
} else {
    echo "$n quá lớn";
}
?>
