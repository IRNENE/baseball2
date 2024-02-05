<?php
include("../pages/db_connect.php");
if (!isset($_POST["id"])) {
    $id = 0;
} else {
    $id = $_POST["id"];
}
$class = $_POST["class"];
$other = $_POST["other"];
$size = $_POST["size"];
$brand = $_POST["brand"];
$color = $_POST["color"];
$sql = "UPDATE product_info SET class='$class',
other='$other',size='$size',brand='$brand',color='$color' WHERE id=$id AND valid=1";
if ($conn->query($sql) === TRUE) {

    echo "更新成功";
} else {
    echo "更新資料錯誤:" . $conn->error;
}

// echo $sql;
$conn->close();
header("location:detail.php?id=$id");
