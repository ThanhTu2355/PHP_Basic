<?php
// Các hàm về chuỗi
// 1. Hàm explode: Chuyển một chuỗi thành mảng
$str = "Hoc PHP MySQL";
$arr1 = explode(' ', $str);
var_dump($arr1);
echo "<br>";

// 2. Hàm implode: Chuyển một mảng thành chuỗi
$arr2 = ["HTML", "CSS", "JS"];
$str1 = implode(', ', $arr2);
echo $str1;
echo "<br>";

// 3. Hàm strlen(): Trả về chiều dài của chuỗi
echo strlen($str1);
echo "<br>";

// 4. Hàm thay thế chuỗi: str_replace(<Chuỗi con cũ>, <chuỗi con mới>, <chuỗi gốc>)
$str2 = str_replace("Học", "Lập trình", "Học PHP");
echo $str2;
echo "<br>";

// 5. Hàm lấy chuỗi con: substr(<chuỗi gốc>, <vị trí bắt đầu>,[<số ký tự>])
$str3 = substr("Hoc PHP", 4);//Giá trị trả về là PHP
echo $str3;
echo "<br>";

$str4 = substr("Hoc PHP", 4, 2);//Giá trị trả về là PH
echo $str4;
echo "<br>";

// 6. Hàm md5(): Sử dụng để mã hóa một chuỗi thành một dãy 32 ký tự
$str = "Hello";
$s1 = md5($str); // $s1 có giá trị: 8b1a9953c4611296a827abf8c47804d7
echo $s1 . "<br>";

// 7. Hàm chuyển ký tự hoa thường
// Hàm strtolower($str): Chuyển chuỗi sang chữ thường
$str5 = "computEr gRaPhic";
echo strtolower($str5) . "<br>";

// Hàm strtoupper($str): Chuyển chuỗi sang chữ hoa
echo strtoupper($str5) . "<br>";

// Hàm ucwords($str): Chuyển ký tự đầu tiên của mỗi từ trong chuỗi sang chữ hoa
echo ucwords(strtolower($str5)) . "<br>";

?>