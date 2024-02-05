<?php
include("../pages/db_connect.php");

$alter_ID_sql_PRODUCT = "ALTER TABLE `product_info` AUTO_INCREMENT = 1";
if (!$conn->query($alter_ID_sql_PRODUCT) === TRUE) {
    echo "更新product_info AUTO_INCREMENT失敗" . $conn->error;
}

// 检查是否有选中的选项
if (isset($_POST['brandValue'])) {
    $selectedbrandValue = implode(',', $_POST['brandValue']);
}
if (isset($_POST['colorValue'])) {
    $selectedcolorValue = implode(',', $_POST['colorValue']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 驗證輸入
    $classValue = isset($_POST["classValue"]) ? $_POST["classValue"] : '';
    $otherValue = isset($_POST["otherValue"]) ? $_POST["otherValue"] : '';
    $sizeValue = isset($_POST["sizeValue"]) ? $_POST["sizeValue"] : '';
    // 使用 classValue 查找记录的 ID
    $id_query = "SELECT ID FROM product_info WHERE class = '$classValue'";
    $id_result = $conn->query($id_query);
    if ($id_result && $id_result->num_rows > 0) {
        $row = $id_result->fetch_assoc();
        $record_id = $row['ID'];
        // 使用找到的记录 ID 更新记录
        $update_query = "UPDATE product_info SET other = '$otherValue', size = '$sizeValue', brand = '$selectedbrandValue', color = '$selectedcolorValue', created_at = NOW(), valid = 1 WHERE ID = $record_id";

        $update_result = $conn->query($update_query);
        if (!$update_result) {
            die("更新记录失败：" . $conn->error);
        } else {
            echo "记录更新成功！";
            header("Location: detail.php?id=" . $record_id);
            var_dump($record_id);
        }
    } else {
        echo "未找到匹配的记录！";
    }
}
$conn->close();
