<?php
    //Biến toàn cục và biến cục bộ
    //1. Biến toàn cục: khai báo bên ngoài hàm và không sử dụng bên trong được
    $a = 5;//Biến toàn cục
    function myFun(){
        echo $a; //Không truy xuất đc biến $a
    }
    // myFun(); //Báo lỗi
    //Lưu ý: Để truy xuất được biến toàn cục trong hàm => dùng global
    function myFun1(){
        global $a;
        echo $a;//truy xuất được $a
    }
    myFun1();

?>