<?php
// 1. Cấu trúc lặp
// Ví dụ 1: In ra các số từ 1 đến 5
echo "<br>========== In ra các số từ 1 đến 5 với for ==========<br>";
for ($a = 1; $a <= 5; $a++) {
    echo $a . "<br>";
}

echo "<br>========== Tổng các số từ 1 đến n với for ==========<br>";
$n = 10;
$tong = 0;
for ($i = 1; $i <= $n; $i++) {
    $tong += $i;
}
echo "Tổng có giá trị: " . $tong . "<br>";

// 2. Kiểu dữ liệu mảng chỉ số trong PHP
// 2.1. Khai báo mảng chỉ số => chỉ số của phần tử là số nguyên
$arr1 = [];

// 2.2. Gán giá trị cho các phần tử trong mảng chỉ số
$arr1[0] = "HTML";
$arr1[] = 25;
$arr1[] = "CSS";

// 2.3. Vừa khai báo, vừa gán giá trị cho mảng chỉ số
$arr2 = ["C#", "Java", "PHP", "MySQL"];

// 2.4. Xuất mảng với var_dump
echo "<br>========== Xuất mảng với var_dump ==========<br>";
var_dump($arr1);
echo "<br>";
// 2.5. Xuất mảng với print_r
echo "<br>========== Xuất mảng với print_r ==========<br>";
print_r($arr1);

echo "<br>========== Xuất mảng với print_r theo định dạng gốc ==========<br>";
echo "<pre>";
print_r($arr1);
echo "</pre>";

// 3. Kiểu dữ liệu mảng kết hợp => là mảng mà chỉ số mảng là một chuỗi còn gọi là khóa hay gọi là key
// 3.1 Khai báo và gán giá trị
$arr3 = [];
$arr3["LC"] = "Hello";
$arr3["GB"] = "Good Bye";
$arr3["NB"] = 19;

// 3.2 Xuất mảng với var_dump
echo "<br>========== Xuất mảng với var_dump ==========<br>";
var_dump ($arr3);
echo "<br>";


echo "<br>========== Xuất mảng với print_r theo định dạng gốc ==========<br>";
echo "<pre>";
print_r($arr3);
echo "</pre>";

// 3.3. Vừa khai báo, vừa gán giá trị cho mảng kết hợp
$arr4 = [
    "WE" => "Thiết kế Web",
    "PR" => "Ngôn ngữ PHP",
    "DA" => "Cơ sở dữ liệu"
];

echo "<br>-- Xuất mảng kết hợp với print_r theo định dạng gốc --<br>";
echo "<pre>";
print_r($arr4);
echo "</pre>";

// 4. Cấu trúc lặp foreach trong PHP
// 4.1. Lặp với mảng chỉ số để lấy giá trị: Xuất ra các giá trị trong $arr2
$arr2 = [1, 2, 3, 4, 5];
echo "<br>========== Xuất các giá trị mảng chỉ số với foreach ==========<br>";
foreach ($arr2 as $val) {
    echo "Giá trị: $val <br>";
}

// 4.2. Lặp với mảng chỉ số để lấy giá trị và key: Xuất ra các giá trị và key trong $arr2
echo "<br>========== Xuất các key và giá trị trong mảng chỉ số với foreach ==========<br>";
foreach ($arr2 as $key => $val) {
    echo "Key: $key - Giá trị: $val <br>";
}

// 4.3. Lặp với mảng kết hợp để lấy giá trị: Xuất ra các giá trị trong $arr4
echo "<br>========== Xuất các giá trị mảng kết hợp với foreach ==========<br>";
foreach ($arr4 as $val) {
    echo "Giá trị: $val <br>";
}

// 4.4. Lặp với mảng kết hợp để lấy giá trị và key: Xuất ra các giá trị và key trong $arr4
echo "<br>========== Xuất các key và giá trị trong mảng kết hợp với foreach ==========<br>";
foreach ($arr4 as $key => $val) {
    echo "Key: $key - Giá trị: $val <br>";
}
?>