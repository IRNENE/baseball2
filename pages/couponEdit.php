<?php
require_once("./db_connect.php");
if (!isset($_GET["name"])) {
    echo "請循正常管道進入";
    exit;
}


$id=$_GET["id"];
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

$sql = "UPDATE coupon SET `name`='$name',coding='$coding',`option`='$option',discount='$option_detail',`description`='$description',time_start='$start_time',time_end='$end_time',use_time='$use_time',use_restrict='$use_restrict',use_condition='$valid_option',update_time='$now' WHERE id=$id";

if ($conn->query($sql)) {
    echo "新增資料成功";
} else {
    echo "新增資料錯誤: " . $conn->error;
}
$conn->close();

header("location:coupon-detail.php?id=$id");
