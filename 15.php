<?php
    //Xử lý thời gian => timestamp => là khoảng thời gian tính bằng giây từ lúc 0h ngày 1/1/1970
    //Thiết lập lấy đúng giờ theo múi giờ địa phương
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo date("d/m/Y H:i:s");//mặc định thì hàm date xuất ra thời gian hiện tại
    echo "<br>";
    echo date("d/m/Y H:i:s", 86401);
    echo "<br>";
    //Xuất ra thời gian hiện tại với time
    echo time();//xuất ra số giây tương ứng với thời gian hiện tại
    echo "<br>";
    echo date("d/m/Y H:i:s", 1734313889);
    echo "<br>";
    //Chuyển đổi chuỗi thời gian Y-m-d sang timestamp tương ứng
    echo strtotime("2024-12-16");
    echo "<br>";
    //Hàm checkdate
    var_dump(checkdate(1,11,2005));
    echo "<br>";
    //Sử dụng hàm mktime để chuyển đổi ngày tháng => timestamp
    $so = mktime(0, 0, 0, 12, 16, 2024);
    echo $so;
    echo "<br>";
    //Yêu cầu xuất ra ngày tháng năm sau 14 ngày sau ngày hôm nay
    $so1 = mktime(0, 0, 0, 12, 16 + 14, 2024);
    //Chuyển đổi sang chuỗi ngày tháng
    echo date("d/m/Y, $so1");
    echo "<br>";
    //Lấy ngày hiện tại
    echo date("d");
    echo "<br>";
    //Xuất ra ngày mai
    echo date("d/m/Y",mktime(0, 0, 0, date("m"), date("d") + 1, date("Y")));
    echo "<br>";
    //Xuất ra tháng sau
    echo date("d/m/Y",mktime(0, 0, 0, date("m") + 1, date("d"), date("Y")));
    echo "<br>";
    //Xuất ra năm sau
    echo date("d/m/Y",mktime(0, 0, 0, date("m"), date("d"), date("Y") + 1));
    echo "<br>";
?>