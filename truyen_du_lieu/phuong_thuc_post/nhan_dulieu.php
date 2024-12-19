<?php
    //var_dump($_POST);
    $txtTen = $_POST["txtten"];
    $txtTuoi = $_POST["txttuoi"];
    echo "Chào bạn $txtTen, có tuổi là: $txtTuoi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhận với phương thức POST</title>
</head>
<body>
    <h1>
        Chào bạn <?php echo $txtTen; ?>, tuổi là <?php echo $txtTuoi; ?>
    </h1>
</body>
</html>