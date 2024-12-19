<?php
// Các hàm thư viện thường dùng
// 1. Hàm liên quan đến kiểu dữ liệu: gettype => lấy kiểu dữ liệu, settype => ép kiểu dữ liệu

$a = "32"; // string
echo "<br>Ban đầu, a có kiểu: " . gettype($a) . "<br>";
settype($a, "integer"); // $a được chuyển thành kiểu integer
echo "Sau khi ép kiểu, a có kiểu: " . gettype($a) . "<br>";

$b = 32; // integer
echo "<br>Ban đầu, b có kiểu: " . gettype($b) . "<br>";
settype($b, "string"); // $b được chuyển thành kiểu string
echo "Sau khi ép kiểu, b có kiểu: " . gettype($b) . "<br>";

$c = true; // boolean
echo "<br>Ban đầu, c có kiểu: " . gettype($c) . "<br>";
settype($c, "integer"); // $c được chuyển thành kiểu integer (có giá trị 1)
echo "Sau khi ép kiểu, c có kiểu: " . gettype($c) . "<br>";

$x = 589490; // $x kiểu integer
echo "<br>Ban đầu, x có kiểu: " . gettype($x) . "<br>";
$x = (boolean)$x; // $x được chuyển thành kiểu boolean
echo "Sau khi ép kiểu, x có kiểu: " . gettype($x) . "<br>";

// 2. Các hàm kiểm tra kiểu dữ liệu của biến

$n = 31; // $n là số nguyên
$isInt = is_int($n); // Trả về true
echo "<br>";
var_dump($n);

$x = "3.14"; // $x là chuỗi
$isFloat = is_float($x); // Trả về true
echo "<br>";
var_dump($x);

$y = [2, 1, 3]; // $y là mảng
$isArray = is_array($y); // Trả về true
echo "<br>";
var_dump($y);

// 3. Kiểm tra sự tồn tại của biến với isset => kiểm tra xem biến có tồn tại và không có giá trị null hay không?
// Giá trị trả về là `true` nếu biến tồn tại và khác null, `false` nếu không tồn tại hoặc có giá trị NULL.

var_dump(isset($x)); // Giá trị trả về: false (do $x chưa được khai báo)

$bn;
var_dump(isset($bn)); // Giá trị trả về: false (do tồn tại nhưng do có giá trị là null)

$an = 5;
var_dump(isset($an)); // Giá trị trả về: true (do $an tồn tại và có giá trị khác null)

$cn = "";
var_dump(isset($cn)); // Giá trị trả về: true (do $cn tồn tại và có giá trị khác null) chuỗi rỗng và null khác nhau

// 4. Sử dụng hàm empty() để kiểm tra biến có giá trị rỗng hay không => true or false
// Các giá trị sau được xem là rỗng: chuỗi "", 0, "0", 0.0, null, false, [], và biến chưa được gán giá trị

echo "<br>";
$ax;
var_dump(empty($ax)); // Kết quả: bool(true)

echo "<br>";
$ab = "1";
var_dump(empty($ab)); // Kết quả: bool(false)

echo "<br>";
var_dump(empty($xc)); // Kết quả: bool(true)

// 5. Sử dụng hàm die() để dừng chương trình
echo "<br>Trước khi có die()<br>";
die("Đã thoát chương trình.");
echo "Sau khi gọi die().";
?>