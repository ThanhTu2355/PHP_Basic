<?php
    $kq = "";
    if(isset($_GET["txtA"]) && isset($_GET["txtB"])){
        $hsa = $_GET["txtA"];
        $hsb = $_GET["txtB"];

        if ($hsa == 0) {
            if ($hsb == 0) {
                $kq =  "Phương trình vô số nghiệm";
            } else {
                $kq =  "Phương trình vô nghiệm";
            }
        } else {
            $nghiem = -$hsb / $hsa;
            $kq =  "Phương trình có nghiệm x = $nghiem";
        }
    }
?>

<html>
<head>
    <meta http_equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Truyền dữ liệu GET</title>
</head>
<body>
    <!-- action rỗng => file nhận và truyền dữ liệu là một -->
    <form action="" method="GET">
        <p>Hệ số a: <input type="text" name="txtA" value=""></p>
        <p>Hệ số b: <input type="text" name="txtB" value=""></p>
        <p><?php echo $kq; ?></p>
        <p><input type="submit" name="btnsubmit" value="Giải"></p>
    </form>
</body>
</html>