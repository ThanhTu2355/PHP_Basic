<?php
    //Sử dụng inclue => lênh lỗi thì hiện lỗi => lệnh ko lỗi vẫn thực hiện
    // include_once "header/head1.php";
    // echo "<br>";
    // include "content/content.php";
    // echo "<br>";
    // include_once "header/head.php";
    // include "footer/foot.php";
    // echo "<br>";
    
    //Sử dụng inclue => lênh lỗi thì hiện lỗi => lệnh bên dưới sẽ dừng
    require_once "header/head.php";
    echo "<br>";
    require "content/content1.php";
    echo "<br>";
    require_once "header/head.php";
    require "footer/foot.php"
?>