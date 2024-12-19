<?php
    //Gọi hàm giải ptb1
    // include_once "giai_phuongtrinh/ptb1.php";
    //Gọi hàm giải ptb2
    include_once "giai_phuongtrinh/ptb2.php";
    $hsa = 1;
    $hsb = 3;
    echo "<br>================ Giải phương trình bậc 1 ===================<br>";
    echo giaiPTBN($hsa, $hsb);

    
    $hsa = 1;
    $hsb = 2;
    $hsc = -3;
    echo "<br>================ Giải phương trình bậc 2 ===================<br>";
    echo giaiPTBH($hsa, $hsb, $hsc);

?>