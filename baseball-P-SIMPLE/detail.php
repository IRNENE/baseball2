<?php
include 'C:\xampp\htdocs\baseball-P\db_connect.php';
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM product_info WHERE ID=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $rows = $result->fetch_assoc();
    } else {
        echo "獲取失敗";
    }
} else {
    echo "ID parameter is missing";
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php include("../baseball-P/css.php") ?>
</head>

<body>

    <div class="container mt-3">
        <h2><?= $rows["class"] ?> 詳細頁面</h2>
        <div> <a href="category_all.php">
                <i class="fa-solid fa-house fa-fw"></i>
            </a></div>
        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <td><?= $rows["ID"] ?></td>
            </tr>
            <tr>
                <th>class</th>
                <td><?= $rows["class"] ?></td>
            </tr>
            <tr>
                <th>other</th>
                <td><?= $rows["other"] ?></td>
            </tr>
            <tr>
                <th>size</th>
                <td><?= $rows["size"] ?></td>
            </tr>
            <tr>
                <th>brand</th>
                <td>
                    <?php
                    // 假设 $rows 是您的数组，包含要输出的数据

                    // 获取要输出的品牌字符串
                    $brand = $rows["brand"];

                    // 使用逗号分隔品牌字符串，并将其转换为数组
                    $brand_array = explode(',', $brand);

                    // 指定每行显示的品牌数量
                    $brands_per_line = 6;

                    // 分割数组，每个子数组包含指定数量的品牌数据
                    $chunked_brands = array_chunk($brand_array, $brands_per_line);

                    // 输出品牌数据的每个子数组
                    foreach ($chunked_brands as $brands) {
                        echo implode(', ', $brands) . "<br>";
                    }
                    ?>

                </td>
            </tr>
            <tr>
                <th>color</th>
                <td><?= $rows["color"] ?></td>
            </tr>
            <tr>
                <th>狀態</th>
                <td><?php if ($rows["valid"] == 1) {
                        echo "上架";
                    } else {
                        echo "下架";
                    } ?></td>
            </tr>

        </table>


        <div class="d-flex justify-content-between">
            <a name="" id="" class="btn btn-primary" href="alterCategory.php?id=<?= $rows["ID"] ?>" role="button"><i class="fa-solid fa-pen-to-square"></i>
            </a>

            <a class="btn btn-danger" href="delate.php?id=<?= $rows["ID"] ?>" role="button"> <i class="fa-solid fa-trash fa-fw"></i>
            </a>

        </div>


    </div>

    <?php include("../baseball-P/js.php") ?>

</body>

</html>