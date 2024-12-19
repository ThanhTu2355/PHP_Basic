<?php
    //Khai báo biến bắt đầu bằng dấu $ => Kiểm tra kiểm dữ liệu của biến với hàm gettype
    $a = 5;
    echo gettype($a);
    echo '<br>';

    $b = 5.892;
    echo gettype($b);
    echo '<br>';

    $hello = 'Hello';
    echo gettype($hello);
    echo '<br>';

    $boolean = true;
    echo gettype($boolean);
    echo '<br>'; 
    
    //Khai báo hằng
    define('HANG_NGUYEN', 6);
    define('HANG_CHUOI', 'Hello');
    echo gettype(HANG_NGUYEN);
    echo '<br>'; 
    echo gettype(HANG_CHUOI);
    echo '<br>'; 

    //Sử dụng chuỗi trong PHP
    //1. Sử dụng dấu nháy đơn => nối chuỗi bằng ký tự .
    // $ho = 'Thanh';
    // $ten = 'Tus';
    // $hoten = 'Họ tên: ' . $ho . ' ' . $ten . '<br>';
    // echo $hoten;

    //2. Sử dụng dấu nháy đôi => nối chuỗi bằng tên biến
    $ho = 'Thanh';
    $ten = 'Tus';
    $hoten = "Họ tên: $ho $ten <br  >";
    echo $hoten;

    //Sử dụng phép toán 3 ngôi
    $n = -5;
    $kq1 = $n > 0 ? 'Số dương' : ($n ==0 ? 'Số không' : 'Số âm');
    $kq2 = $n == 0 ? 'Số không' : 'Số khác không';
    $kq3 = $n > 0 && $n %2 != 0 ? 'Số dương lẻ' : 'Số không lẻ';
    echo $kq1;
?>