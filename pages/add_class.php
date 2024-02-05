<?php
include("../pages/db_connect.php");

$alter_ID_sql_PRODUCT = "ALTER TABLE `product_info` AUTO_INCREMENT = 1";

if (!$conn->query($alter_ID_sql_PRODUCT) === TRUE) {
    echo "更新product_info AUTO_INCREMENT失敗" . $conn->error;
}

if (!isset($_POST["name"])) {
    echo "請遵循正常管道";
    exit;
}
$name = trim($_POST["name"]);
if (empty($name)) {
    echo "請填入class名稱為必要欄位請填入";
    exit;
}

$check_class_sql = "SELECT class FROM `product_info` ";
$check_class_result = $conn->query($check_class_sql);
$check_class_row = $check_class_result->fetch_all(MYSQLI_ASSOC);

$check_class = array_map('trim', array_column($check_class_row, 'class'));

$check_other_sql = "SELECT other FROM `product_info` ";
$check_other_result = $conn->query($check_other_sql);
$check_other_row = $check_other_result->fetch_all(MYSQLI_ASSOC);

$check_other = array_map('trim', array_column($check_other_row, 'other'));

$isFound = false;
foreach ($check_other as $item) {
    $itemParts = explode(',', $item);
    // var_dump($item);
    // var_dump($itemParts);
    if (in_array($name, $itemParts)) {
        $isFound = true;
        break;
    }
}
if (in_array($name, $check_class) || $isFound) {
    echo " <script>
    alert('此分類已存在分類列表');
    window.location.href = 'addClass.php';
    </script> ";
    exit;
} else {
    $sql_product_info = "INSERT INTO `product_info` (class, created_at, valid) VALUES ('$name', NOW(), 1)";
    if ($conn->query($sql_product_info)) {
        echo "<script>alert('{$name}已新增分類列表'); 
        window.location.href='addClass.php';</script>";
        exit;
    } else {
        echo "新增product_info class資料錯誤" . $conn->error;
    }
}

$conn->close();




// 这可能是由于 in_array() 函数的工作方式造成的。in_array() 函数在搜索整个数组时，只检查数组的一级元素，而不会递归检查多维数组的子数组。因此，如果您想要在多维数组中搜索特定的值，您需要使用适当的逻辑来检查每个子数组中是否包含该值。

// 在您提供的情况下，$check_other 数组是一个包含多个子数组的二维数组。所以，当使用 in_array() 函数搜索整个数组时，它只会查找一级元素，而不会深入子数组。因此，只有当 $name 存在于子数组中时，in_array() 才会返回 true。

// 为了解决这个问题，您可以使用 foreach 循环来逐个检查子数组，或者使用 array_search() 函数来在子数组中查找特定值。这样可以确保您对每个子数组都进行了适当的检查，以便找到 $name。
// 在编程中，数组可以是一维的（包含单个索引的列表），也可以是多维的（包含多个索引的嵌套列表）。在一维数组中，元素位于同一级别上，而在多维数组中，元素可以包含子数组，这些子数组本身又可以包含更多的元素或子数组。

// 例如，在PHP中，以下是一个一维数组的示例：

// php
// Copy code
// $oneDimensionalArray = array("apple", "banana", "orange", "grape");
// 而下面是一个二维数组的示例：

// php
// Copy code
// $twoDimensionalArray = array(
//     array("apple", "banana", "orange"),
//     array("grape", "watermelon", "pineapple")
// );
// 在二维数组中，$twoDimensionalArray 包含两个子数组，每个子数组都包含了一组水果。这两个子数组都是一级元素，而水果本身则是二级元素。
