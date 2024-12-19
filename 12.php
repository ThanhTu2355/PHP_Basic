<?php
    include_once "giai_phuongtrinh/ptb1.php";
    $kq = "";
    if(isset($_POST["txtA"]) && isset($_POST["txtB"])){
        $hsa = $_POST["txtA"];
        $hsb = $_POST["txtB"];
        //Giải PT
        $kq = giaiPTBN($hsa, $hsb);
    }
?>

<html>
<head>
    <meta http_equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Truyền dữ liệu POST</title>
</head>
<body>
    <!-- action rỗng => file nhận và truyền dữ liệu là một -->
    <form action="" method="POST">
        <p>Hệ số a: <input type="text" name="txtA" value=""></p>
        <p>Hệ số b: <input type="text" name="txtB" value=""></p>
        <p><?php echo $kq; ?></p>
        <p><input type="submit" name="btnsubmit" value="Giải"></p>
    </form>
</body>
</html>