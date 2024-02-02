<?php
include 'C:\xampp\htdocs\baseball-P\db_connect.php';

// 设置分页
$perPage = 8;
$sql_Search = "SELECT * FROM product_info WHERE valid=1";
$result_Search = $conn->query($sql_Search);
$totalCount = $result_Search->num_rows;
// var_dump($totalCount);
$pageCount = ceil($totalCount / $perPage);

// 检查是否设置了排序参数
if (isset($_GET["order"])) {
    $order = $_GET["order"];
    if ($order == 1) {
        $orderString = "ORDER BY ID ASC";
    } elseif ($order == 2) {
        $orderString = "ORDER BY ID DESC";
    }
}

// 检查是否设置了搜索参数
if (isset($_GET["search"])) {
    $search = $_GET["search"];
    $sql = "SELECT * FROM product_info WHERE class LIKE '%$search%'AND valid=1 OR other LIKE '%$search%' AND valid=1";
} // 检查是否设置了页码参数
elseif (isset($_GET["p"])) {
    $p = $_GET["p"];
    $startIndex = ($p - 1) * $perPage;
    $sql = "SELECT * FROM product_info WHERE valid=1 $orderString LIMIT $startIndex, $perPage";
} else {
    $p = 1;
    $order = 1;
    $orderString = "ORDER BY ID ASC";
    $sql = "SELECT * FROM product_info WHERE valid=1 LIMIT  $perPage";
}


$result = $conn->query($sql);
if (isset($_GET["search"])) {
    $Count = $result->num_rows;
} else {
    $Count = $totalCount;
}
// var_dump($sql);
// var_dump($result);

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

<body class="page1_PJ">

    <div class="container">
        <h1>類別列表</h1>
        <div class="py-2">
            <div class="row g-3">
                <?php if (isset($_GET["search"])) : ?>
                    <div class="col-auto">
                        <a href="category_all.php" class="btn btn-primary" role="button"><i class="fa-solid fa-arrow-left fa-fw"></i></a>
                    </div>
                <?php endif; ?>

                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="search" class="form-control" placeholder="搜尋關鍵字" name="search" <?php if (isset($_GET["search"])) :
                                                                                                        $searchValue = $_GET["search"]; ?> value="<?= $searchValue ?>" <?php endif; ?>>
                        <!-- 搜尋結果放在搜尋框裡 -->
                        <button class="btn btn-outline-secondary" type="submit">
                            <i class="fa-solid fa-magnifying-glass"> </i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex justify-content-between pb-2 align-items-center">
            <div>
                共<?= $Count ?>筆
            </div>

        </div>
        <?php if (!isset($_GET["search"])) : ?>
            <div class="py-2 justify-content-between d-flex align-items-center">
                <div>

                    <a href="addClass.php"> <i class="fas fa-plus-square"></i>&nbsp;class</a>
                    &nbsp;&nbsp;
                    <a href="addOther.php"> <i class="fas fa-tag"></i>
                        other</a>

                </div>

                <div class="btn-group d-flex align-items-center">
                    <div class="me-2">排序</div>
                    <a class="btn btn-primary
                        <?php if ($order == 1) echo "active" ?>
                        " href="category_all.php"><i class="fa-solid fa-arrow-down-1-9 fa-fw"></i></a>
                    <a class="btn btn-primary
                        <?php if ($order == 2) echo "active" ?>
                        " href="category_all.php?order=2&p=<?= $p ?>"><i class="fa-solid fa-arrow-down-9-1 fa-fw"></i></a>

                </div>
            </div>
        <?php endif; ?>



        <?php if ($totalCount > 0) : ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>class</th>
                        <th>other</th>
                        <th>狀態</th>
                        <th>詳細訊息</th>
                        <th>功能</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $rows = $result->fetch_all(MYSQLI_ASSOC);
                    foreach ($rows as $row) : ?>
                        <tr>
                            <td><?= $row["ID"] ?></td>
                            <td class=" data-column"><?= $row["class"] ?></td>
                            <td class=" data-column"><?= $row["other"] ?></td>
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
                            <td class="col data-column">
                                <div class="d-flex flex-row justify-content-around">
                                    <div><a href="alterCategory.php?id=<?= $row["ID"] ?>">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a></div>
                                    <div><a href="delate.php?id=<?= $row["ID"] ?>"><i class="fa-solid fa-trash"></i></a></div>
                                </div>


                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php if (!isset($_GET["search"])) : ?>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $pageCount; $i++) : ?>
                            <li class="page-item
                            <?php if ($i == $p) echo "active";
                            ?>"><a class="page-link" href="category_all.php?order=<?= $order ?>&p=<?= $i ?>"><?= $i ?></a></li>
                        <?php endfor; ?>

                    </ul>
                </nav>
            <?php endif; ?>
        <?php else : ?>
            沒有類別資料
        <?php endif; ?>

    </div>
    <?php include("../baseball-P/js.php") ?>

</body>

</html>
<!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tds = document.querySelectorAll('td[data-column]');
            tds.forEach(td => {
                td.addEventListener('click', function() {
                    const column = this.dataset.column;
                    const content = this.textContent.trim();
                    this.innerHTML = `<input type="text" value="${content}" data-column="${column}">`;
                    const input = this.querySelector('input');
                    input.focus();
                    input.addEventListener('blur', function() {
                        const newValue = this.value.trim();
                        const oldValue = content;
                        if (newValue !== oldValue) {
                            const td = this.parentNode;
                            const column = td.dataset.column;
                            const id = td.parentNode.querySelector('td[data-column="ID"]').textContent.trim();
                            // 在此发送 AJAX 请求将 newValue 更新到数据库
                            // 例如：
                            // fetch('update.php', {
                            //     method: 'POST',
                            //     headers: {
                            //         'Content-Type': 'application/json'
                            //     },
                            //     body: JSON.stringify({ id: id, column: column, value: newValue })
                            // })
                            // .then(response => {
                            //     if (!response.ok) {
                            //         throw new Error('Network response was not ok');
                            //     }
                            //     return response.json();
                            // })
                            // .then(data => {
                            //     // 处理成功响应
                            //     console.log(data);
                            // })
                            // .catch(error => {
                            //     // 处理错误
                            //     console.error('There has been a problem with your fetch operation:', error);
                            // });
                            td.textContent = newValue;
                        } else {
                            this.parentNode.textContent = oldValue;
                        }
                    });
                });
            });
        });
    </script> -->