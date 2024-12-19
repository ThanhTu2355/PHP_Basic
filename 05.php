<?php
// Ví dụ 1: Sử dụng switch-case với biến $n
$n = 20;

switch ($n) {
    case 0:
        echo "n có giá trị là 0";
        break;
    case 1:
        echo "n có giá trị là 1";
        break;
    case 2:
        echo "n có giá trị là 2";
        break;
    case 3:
        echo "n có giá trị là 3";
        break;
    default:
        echo "n không xác định";
        echo "<br>";
}

// Ví dụ 2: Sử dụng switch-case với biến $x
$x = 5;

switch ($x) {
    case 0:
    case 1:
    case 2:
        echo "x có giá trị trong khoảng từ 0 đến 2";
        break;
    case 3:
    case 4:
    case 5:
        echo "x có giá trị trong khoảng từ 3 đến 5";
        break;
    default:
        echo "x không xác định";
}
?>
