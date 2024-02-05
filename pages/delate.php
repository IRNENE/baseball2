<?php
include("../pages/db_connect.php");

// 检查是否存在 "id" 参数
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // 构建 SQL 查询
    $sql = "UPDATE product_info SET valid='0' WHERE ID=$id";

    // 执行 SQL 查询
    if ($conn->query($sql) === TRUE) {
        echo " <script>
        alert('商品下架成功');
        window.location.href = 'category_all.php';
        </script> ";
    } else {
        echo "刪除資料錯誤: " . $conn->error;
    }
} else {
    echo "未提供要删除的记录 ID";
}

// 关闭数据库连接
$conn->close();
