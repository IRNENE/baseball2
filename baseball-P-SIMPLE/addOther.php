<?php
include 'C:\xampp\htdocs\baseball-P\db_connect.php';
$sql = "SELECT * FROM product_info";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC)
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
    <div class="container">
        <h2 class="mt-3 mb-2">新增other</h2>

        <div class="mb-2"><a href="category_all.php">
                <i class="fa-solid fa-house fa-fw"></i>
            </a></div>


        <form action="add_other.php" method="post">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <th>類別</th>
                        <td><select id="" name="classValue" required>
                                <option>請選擇類別名稱</option>
                                <?php foreach ($rows as $row) : ?>
                                    <option value="<?php echo $row["class"]; ?>"><?php echo $row["class"]; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <th><label for="otherValue">規格</label></th>
                        <td>
                            <input type="text" id="otherValue" name="otherValue" placeholder="使用,號區分不同規格" required>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="sizeValue">尺寸</label></th>
                        <td><input type="text" id="sizeValue" name="sizeValue" placeholder="使用,號區分不同尺寸" required></td>
                    </tr>
                    <tr>
                        <th><label for="brandValue">品牌</label></th>
                        <td>
                            <div class="d-flex flex-row gap-3">
                                <div> <input type="checkbox" id="brandValue" name="brandValue[]" value="MIZUNO"> MIZUNO<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="久保田Slugger"> 久保田Slugger<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="ZETT"> ZETT<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="SSK"> SSK<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="LouisvilleSlugger"> LouisvilleSlugger<br>
                                </div>
                                <div><input type="checkbox" id="brandValue" name="brandValue[]" value="EASTON"> EASTON<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="BRETT"> BRETT<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="Wilson"> Wilson<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="UNDERARMOUR"> UNDERARMOUR<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="NIKE"> NIKE<br>
                                </div>
                                <div><input type="checkbox" id="brandValue" name="brandValue[]" value="adidas"> adidas<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="創信"> 創信<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="MLB"> MLB<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="統一獅"> 統一獅<br>
                                    <input type="checkbox" id="brandValue" name="brandValue[]" value="asics"> asics<br>
                                </div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th><label for="colorValue">顏色</label></th>
                        <td>
                            <div class="d-flex flex-row gap-3">
                                <div>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="黑"> 黑<br>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="白"> 白<br>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="紅"> 紅<br>
                                </div>
                                <div>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="黃"> 黃<br>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="藍"> 藍<br>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="綠"> 綠<br>
                                </div>
                                <div>
                                    <input type="checkbox" id="colorValue" name="colorValue[]" value="橘"> 橘<br>

                                </div>
                            </div>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary">
                    新增
                </button>

            </div>

        </form>
    </div>
    <?php include("../baseball/js.php"); ?>
</body>

</html>