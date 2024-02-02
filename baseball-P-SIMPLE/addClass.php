<?php
include 'C:\xampp\htdocs\baseball-P\db_connect.php';
// 設置分頁
$sql = "SELECT * FROM product_info ";
// 連數據庫
$result = $conn->query($sql);

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

<body class="page2_PJ">
    <div class="container">
        <div class="addclass">

            <form action="add_class.php" method="post">
                <div class=my-3>
                    <h2 style="text-align: left;">新增class列表</h2>

                </div>


                <div class="location">
                    <input type="text" name="name" class="form-control" placeholder="請輸入class 名稱">
                    <button type="submit" class="btn btn-primary">
                        新增
                    </button>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </form>
        </div>
        <div class="m-2"><a href="category_all.php">
                <i class="fa-solid fa-house fa-fw"></i>
            </a></div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>class</th>
                    <!-- <th>other</th> -->
                    <th>狀態</th>
                    <th>編輯</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $rows = $result->fetch_all(MYSQLI_ASSOC);
                foreach ($rows as $row) : ?>
                    <tr>
                        <td><?= $row["ID"] ?></td>
                        <td class=" data-column"><?= $row["class"] ?></td>
                        <!-- <td class=" data-column"><?= $row["other"] ?></td> -->
                        <td class=" data-column">
                            <?php if ($row["valid"] == 1) {
                                echo "上架";
                            } else {
                                echo "下架";
                            } ?>
                        </td>
                        <td class="col data-column">
                            <a href="detail.php?id=<?= $row["ID"] ?>">
                                查看
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


    </div>


    <?php include("../baseball/js.php"); ?>
</body>

</html>