<?php
// Giải phương trình bậc hai ax^2 + bx + c = 0
$a = 1;
$b = 2;
$c = -3;


if ($a == 0) {
    // Giải phương trình bậc nhất bx + c = 0
        if ($b == 0) {
            if ($c == 0) {
                echo "Phương trình vô số nghiệm";
            } else {
                echo "Phương trình vô nghiệm";
            }
        } else {
            $nghiem = -$c / $b;
            echo "Phương trình có nghiệm x = $nghiem";
        }
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            echo "Phương trình bậc 2 vô nghiệm<br>";
        } elseif ($delta == 0) {
            $nghiemKep = -$b / (2 * $a);
            echo "Phương trình bậc 2 có nghiệm kép x = $nghiemKep<br>";
        } else {
            $canDelta = sqrt($delta);
            $x1 = (-$b + $canDelta) / (2 * $a);
            $x2 = (-$b - $canDelta) / (2 * $a);
            echo "Phương trình bậc 2 có hai nghiệm phân biệt: x1 = $x1, x2 = $x2<br>";
        }
    }


?>
