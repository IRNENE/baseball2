<?php
require_once("./db_connect.php");
if (!isset($_GET["name"])) {
    echo "請循正常管道進入";
    exit;
}


$name = $_GET["name"];
$coding = $_GET["coding"];
$option = $_GET["option"];
$option_detail = $_GET["option-detail"];
$description = $_GET["description"];
$start_time = $_GET["start-time"];
$end_time = $_GET["end-time"];
$use_time = $_GET["use-time"];
$use_restrict = $_GET["use-restrict"];
$valid_option = $_GET["valid-option"];
$now = date("Y-m-d H:i:s");

$sql = "INSERT INTO coupon (name, description, option, time_start, time_end, discount, coding, use_time, use_restrict, use_condition, created_at, valid) VALUES ('$name', '$description', '$option', '$start_time', '$end_time', '$option_detail', '$coding', '$use_time', '$use_restrict', '$valid_option', '$now', 1)";

if ($conn->query($sql)) {
    echo "新增資料成功";
} else {
    echo "新增資料錯誤: " . $conn->error;
}
$conn->close();

header("location:coupon-add.php");
