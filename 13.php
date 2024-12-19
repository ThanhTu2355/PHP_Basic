<?php
    include_once "giai_phuongtrinh/ptb2.php";
    $kq = "";
    if(isset($_POST["txtA"]) && isset($_POST["txtB"]) && isset($_POST["txtC"])){
        $hsa = $_POST["txtA"];
        $hsb = $_POST["txtB"];
        $hsc = $_POST["txtC"];
        //Giải PT
        $kq = giaiPTBH($hsa, $hsb, $hsc);
    }
?>

<html>
<head>
    <meta http_equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Giải phương trình bậc 2 với hàm</title>
</head>
<body>
    <!-- action rỗng => file nhận và truyền dữ liệu là một -->
    <form action="" method="POST">
        <p>Hệ số a: <input type="text" name="txtA" value=""></p>
        <p>Hệ số b: <input type="text" name="txtB" value=""></p>
        <p>Hệ số c: <input type="text" name="txtC" value=""></p>
        <p><?php echo $kq; ?></p>
        <p><input type="submit" name="btnsubmit" value="Giải"></p>
    </form>
</body>
</html>