<?php
    include_once "ptb1.php";
?>

<?php
// Giải phương trình bậc hai: ax^2 + bx + c = 0
function giaiPTBH($a, $b, $c){
    $kq = "";
    if ($a == 0) {
            $kq = giaiPTBN($b, $c);
    } else {
        $delta = $b * $b - 4 * $a * $c;
        if ($delta < 0) {
            $kq = "Phương trình bậc 2 vô nghiệm<br>";
        } elseif ($delta == 0) {
            $nghiemKep = -$b / (2 * $a);
            $kq = "Phương trình bậc 2 có nghiệm kép x = $nghiemKep<br>";
        } else {
            $canDelta = sqrt($delta);
            $x1 = (-$b + $canDelta) / (2 * $a);
            $x2 = (-$b - $canDelta) / (2 * $a);
            $kq = "Phương trình bậc 2 có hai nghiệm phân biệt: x1 = $x1, x2 = $x2<br>";
            }
        }
        return $kq;
    }

?>
