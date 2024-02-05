<?php
include("../pages/db_connect.php");
if (!isset($_GET["id"])) {
    $id = 0;
} else {
    $id = $_GET["id"];
}

$sql = "UPDATE product_order SET valid= 0 WHERE id=$id";
if ($conn->query($sql) === TRUE) {

    echo "更新成功";
} else {
    echo "更新資料錯誤:" . $conn->error;
}

// echo $sql;
$conn->close();
header("location:product_order.php");
