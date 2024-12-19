<?php
    //Hàm người dùng tự định nghĩa
    //1. Không có tham số, không có giá trị trả về
    function loiChao(){
        echo "Chào bạn đến với PHP";
    }

    //1.1 Gọi hàm
    loiChao();
    echo "<br>";
    
    //2. Hàm có truyền tham số, không có giá trị trả về
    function xuatLoiChao($str){
        echo $str;
    }
    xuatLoiChao("Chào bạn đến với PHP");
    echo "<br>";
    
    //3. Hàm có giá trị trả về
    function tinhTong($a, $b){
        return $a + $b;
    }
    echo "Tổng có giá trị là: " . tinhTong(2, 5);
    echo "<br>";

    
?>