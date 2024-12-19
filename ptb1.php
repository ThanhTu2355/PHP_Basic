<?php
// Giải phương trình bậc nhất ax + b = 0

$a = 2;
$b = -4;

if ($a == 0) {
    if ($b == 0) {
        echo "Phương trình vô số nghiệm";
    } else {
        echo "Phương trình vô nghiệm";
    }
} else {
    $nghiem = -$b / $a;
    echo "Phương trình có nghiệm x = $nghiem";
}
?>
