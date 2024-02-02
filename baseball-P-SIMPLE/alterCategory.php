<?php
include 'C:\xampp\htdocs\baseball-P\db_connect.php';
if (!isset($_GET["id"])) {
    $id = 0;
} else {
    $id = $_GET["id"];
}
$sql = "SELECT * FROM `product_info`  WHERE ID=$id AND valid=1";
$result = $conn->query($sql);

$rowCount = $result->num_rows;


?>
<!doctype html>
<html lang="en">

<head>
    <title>User</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <?php include("../baseball-P/css.php") ?>
</head>

<body class=page3_PJ>
    <div class="container">

        <?php if ($rowCount == 0) : ?>
            類別不存在
        <?php else :
            $row = $result->fetch_assoc();
            // print_r($row);
        ?>
            <h2 class="mt-4">類別 編輯頁面</h2>
            <div class="py-2">

                <a href="detail.php?id=<?= $row["ID"] ?>"><i class="fa-solid fa-left-long fa-fw"></i></a>
                <!-- <a class="btn btn-primary" href="category_all.php" role="button"><i class="fa-solid fa-house fa-fw custom-icon"></i></a> -->
            </div>
            <form action="alter_other.php" method="post">
                <input type="hidden" name="id" value="<?= $row["ID"] ?>">
                <table class="table table-bordered">
                    <tr>
                        <th>ID</th>
                        <td><?= $row["ID"] ?></td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td><input type="text" class="form-control" value="<?= $row["class"] ?>" name="class"></td>
                    </tr>
                    <tr>
                        <th>other</th>
                        <td><input type="text" class="form-control" value="<?= $row["other"] ?>" name="other"></td>
                    </tr>
                    <tr>
                        <th>size</th>
                        <td><input type="text" class="form-control" value="<?= $row["size"] ?>" name="size"></td>
                    </tr>
                    <tr>
                        <th>brand</th>

                        <td>
                            <textarea rows="3" cols="100" name="brand"><?= trim($row["brand"]) ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>color</th>
                        <td><input type="tel" class="form-control" value="<?= $row["color"] ?>" name="color"></td>
                    </tr>
                </table>
                <div class="">
                    <button type="submit" class="btn btn-primary">save</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
    <?php include("../baseball-P/js.php") ?>
</body>

</html>