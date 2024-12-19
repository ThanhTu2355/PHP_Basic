<?php
// Xây dụng hàm giải phương trình bậc nhất: ax + b = 0
function giaiPTBN($a, $b){
    $kq = "";
    if ($a == 0) {
        if ($b == 0) {
            $kq = "Phương trình vô số nghiệm";
        } else {
            $kq = "Phương trình vô nghiệm";
        }
    } else {
        $nghiem = -$b / $a;
        $kq = "Phương trình có nghiệm x = $nghiem";
    }
    return $kq;
}
?>
