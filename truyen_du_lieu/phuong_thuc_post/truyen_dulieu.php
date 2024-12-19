<?php
    $ten = "";
    $tuoi = "";
    if(isset($_POST["txtten"]) && isset($_POST["txttuoi"])){
        $ten = $_POST["txtten"];
        $tuoi = $_POST["txttuoi"];
    }
?>

<html>
<head>
    <meta http_equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Truyền dữ liệu POST</title>
</head>
<body>
    <!-- <form action="nhan_dulieu.php" method="POST">
        <p>Họ tên: <input type="text" name="txtten" value=""></p>
        <p>Tuổi: <input type="text" name="txttuoi" value=""></p>
        <p><input type="submit" name="btnsubmit" value="Đăng ký"></p>
    </form> -->

    <!-- action rỗng => file nhận và truyền dữ liệu là một -->
    <form action="" method="POST">
        <p>Họ tên: <input type="text" name="txtten" value=""></p>
        <p>Tuổi: <input type="text" name="txttuoi" value=""></p>
        <p><input type="submit" name="btnsubmit" value="Đăng ký"></p>
        <p><?php echo $ten; ?></p>
    </form>
</body>
</html>