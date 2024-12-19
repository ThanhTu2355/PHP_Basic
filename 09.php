<?php
    //Các hàm về mảng
    // 1. Đếm số phần tử trong mảng
    echo "<br>===================== Đếm số phần tử trong mảng =====================<br>";
    $arr1 = ["HTML", "CSS", "JS"];
    echo count($arr1);
    echo "<br>";

    //2. Thêm phần tử vào cuối mảng
    echo "<br>===================== Thêm phần tử vào cuối mảng =====================<br>";
    $arr2 = ["HTML", "CSS", "JS"];
    array_push($arr2, "NodeJS");
    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    //3. Xóa phần tử vào cuối mảng
    echo "<br>===================== Xóa phần tử vào cuối mảng =====================<br>";
    $arr3 = ["HTML", "CSS", "JS"];
    array_pop($arr3);
    echo "<pre>";
    print_r($arr3);
    echo "</pre>";

    //4. Tìm chỉ số theo giá trị phần tử trong mảng
    echo "<br>===================== Tìm chỉ số theo giá trị phần tử trong mảng =====================<br>";
    $arr4 = ["HTML", "CSS", "JS"];
    echo array_search("CSS", $arr4);
    echo "<br>";

    //5. Sắp xếp mảng tăng dần (rsort)
    echo "<br>===================== Sắp xếp mảng tăng (giảm) dần =====================<br>";
    $arr5 = ["HTML", "CSS", "JS"];
    sort($arr5);
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";
?>