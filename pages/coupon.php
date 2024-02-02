<?php
require_once("./db_connect.php");

// 頁數設定
$perPage = 10;

// 搜尋
$p = isset($_GET["p"]) ? $_GET["p"] : 1;
if (isset($_GET["search"])) {
  $search = $_GET["search"];
  $sql = "SELECT * FROM coupon WHERE (name LIKE '%$search%' OR coding LIKE '%$search%') AND valid=1";
  $researchAll = $conn->query($sql);
  $searchCountAll = $researchAll->num_rows;

  $pageSearchCount = ceil($searchCountAll / $perPage);
  $startIndex = ($p - 1) * $perPage;

  $sql .= " LIMIT $startIndex, $perPage";

  $researchAll = $conn->query($sql);
  $searchCount = $researchAll->num_rows;

  if ($searchCount > 0) {
    $rowsSearch = $researchAll->fetch_all(MYSQLI_ASSOC);
  }
} else {
  // 如果沒有搜尋條件，正常處理分頁
  $startIndex = ($p - 1) * $perPage;
  $sql = "SELECT * FROM coupon WHERE valid=1 LIMIT $startIndex, $perPage";
  $researchAll = $conn->query($sql);
  $searchCount = $researchAll->num_rows;

  if ($searchCount > 0) {
    $rowsSearch = $researchAll->fetch_all(MYSQLI_ASSOC);
    $pageSearchCount = ceil($searchCount / $perPage);
  }
}



// 搜尋日期區間
if (isset($_GET["Timestart"]) && isset($_GET["Timeend"])) {
  $Timestart = $_GET["Timestart"];
  $Timeend = $_GET["Timeend"];
  $sql = "SELECT * FROM coupon WHERE valid=1 AND time_start >= '$Timestart' AND time_end <= '$Timeend'";
} else {
  $sql = "SELECT * FROM coupon WHERE valid=1";
};
$searchTime = $conn->query($sql);
$searchTimeCount = $searchTime->num_rows;





// 狀態搜索
if (isset($_GET["status"])) {
  $status = $_GET["status"];
  if ($status == 1) {
    $sqlAll = "SELECT * FROM coupon WHERE valid=1";
  } elseif ($status == 2) {
    $sqlAll = "SELECT * FROM coupon WHERE use_condition='可使用' AND valid=1";
  } elseif ($status == 3) {
    $sqlAll = "SELECT * FROM coupon WHERE use_condition='已停用' AND valid=1";
  } elseif ($status == 4) {
    $sqlAll = "SELECT * FROM coupon WHERE `option`='%數折扣' AND valid=1";
  } elseif ($status == 5) {
    $sqlAll = "SELECT * FROM coupon WHERE `option`='金額折扣' AND valid=1";
  }
} else {
  $sqlAll = "SELECT * FROM coupon WHERE valid=1";
}
$resultAll = $conn->query($sqlAll);
$TotalCount = $resultAll->num_rows;
$pageCount = ceil($TotalCount / $perPage);






// 排序
if (isset($_GET["status"])) {
  $status = $_GET["status"];
  $conditions = "valid=1";

  if (isset($_GET["order"])) {
    $order = $_GET["order"];
    if ($order == "1") {
      $conditions .= " ORDER BY id ASC";
    } elseif ($order == "2") {
      $conditions .= " ORDER BY id DESC";
    } elseif ($order == "3") {
      $conditions .= " ORDER BY discount ASC";
    } elseif ($order == "4") {
      $conditions .= " ORDER BY discount DESC";
    } elseif ($order == "5") {
      $conditions .= " ORDER BY time_start ASC";
    } elseif ($order == "6") {
      $conditions .= " ORDER BY time_start DESC";
    } elseif ($order == "7") {
      $conditions .= " ORDER BY time_end ASC";
    } elseif ($order == "8") {
      $conditions .= " ORDER BY time_end DESC";
    } elseif ($order == "9") {
      $conditions .= " ORDER BY use_time ASC";
    } elseif ($order == "10") {
      $conditions .= " ORDER BY use_time DESC";
    } elseif ($order == "11") {
      $conditions .= " ORDER BY use_restrict ASC";
    } elseif ($order == "12") {
      $conditions .= " ORDER BY use_restrict DESC";
    }
  } else {
    $order = 1;
  }

  if (isset($_GET["p"])) {
    $p = $_GET["p"];
    $startIndex = ($p - 1) * $perPage;
    $conditions .= " LIMIT $startIndex, $perPage";
  }

  switch ($status) {
    case 1:
      $sql = "SELECT * FROM coupon WHERE $conditions";
      break;
    case 2:
      $sql = "SELECT * FROM coupon WHERE use_condition='可使用' AND $conditions";
      break;
    case 3:
      $sql = "SELECT * FROM coupon WHERE use_condition='已停用' AND $conditions";
      break;
    case 4:
      $sql = "SELECT * FROM coupon WHERE `option`='%數折扣' AND $conditions";
      break;
    case 5:
      $sql = "SELECT * FROM coupon WHERE `option`='金額折扣' AND $conditions";
      break;
  }
}


$result = $conn->query($sql);
$rowCount = $result->num_rows;
if ($rowCount > 0) {
  $rows = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- 網頁favcon -->
  <link rel="icon" type="image/png" href="../assets/img/694606.png">
  <title>
    優惠券清單
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  <!-- font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="../assets/css/ader.css" rel="stylesheet" />

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <!-- logo 回首頁連結 -->
      <img src=" ../assets/img/logo(5-3).png" class="navbar-brand-img h-100" alt="main_logo" usemap="#workmap">
      <map name="workmap">
        <area shape="circle" coords="144, 144, 70" href="./firststage.php">
      </map>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav accordion" id="accordionExample">
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <span class="nav-link-text ms-1">會員管理</span>
            </button>
          </div>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">會員列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
                <span class="nav-link-text ms-1">新增會員</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="nav-link-text ms-1">訂單管理</span>
            </button>
          </div>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">訂單列表</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
              <span class="nav-link-text ms-1">商品管理</span>
            </button>
          </div>
          <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="./product-list.php">
                <span class="nav-link-text ms-1">商品列表</span>
              </a>
              <a class="text-white nav-ader" type="button" href="./product-add.php">
                <span class="nav-link-text ms-1">新增商品</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header  ">
            <button class="nav-link text-white accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              <span class="nav-link-text ms-1">租借商品管理</span>
            </button>
          </div>
          <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="./rent_products.php">
                <span class="nav-link-text ms-1">租借列表</span>
              </a>
              <a class="text-white nav-ader" type="button" href="./add-rent_product.php">
                <span class="nav-link-text ms-1 text-nowrap">新增租借商品</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              <span class="nav-link-text ms-1">商品類別管理</span>
            </button>
          </div>
          <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1 text-nowrap">商品類別清單</span>
              </a>
              <a class="text-white nav-ader" type="button" href="#">
                <span class="nav-link-text ms-1">新增類別</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed active bg-gradient-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
              <span class="nav-link-text ms-1">優惠券管理</span>
            </button>
          </div>
          <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="./coupon.php?status=1&p=1">
                <span class="nav-link-text ms-1">優惠券列表</span>
              </a>
              <a class="text-white nav-ader" type="button" href="./coupon-add.php">
                <span class="nav-link-text ms-1 text-nowrap">新增優惠券</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
              <span class="nav-link-text ms-1">課程管理</span>
            </button>
          </div>
          <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="./course_list.php">
                <span class="nav-link-text ms-1">課程列表</span>
              </a>
              <a class="text-white nav-ader" type="button" href="./addCourse.php">
                <span class="nav-link-text ms-1">新增課程</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
              <span class="nav-link-text ms-1">教練管理</span>
            </button>
          </div>
          <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="./teacher_list.php">
                <span class="nav-link-text ms-1">教練列表</span>
              </a>
              <a class="text-white nav-ader" type="button" href="./addTeacher.php">
                <span class="nav-link-text ms-1">新增教練</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
              <span class="nav-link-text ms-1">文章管理</span>
            </button>
          </div>
          <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="./article.php">
                <span class="nav-link-text ms-1">文章列表</span>
              </a>
              <a class="text-white nav-ader" type="button" href="./insert_article.php">
                <span class="nav-link-text ms-1">新增文章</span>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <!-- 麵包屑 -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="./firststage.php">後臺管理</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">優惠券</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">優惠券</h6>
        </nav>
      </div>
    </nav>
    <div class="container">
      <div class="py-2">
        <h2 class="text-center">優惠券清單</h2>
      </div>
      <form action="" <?php if (isset($Timestart)) {
                        echo "style=display:none";
                      } ?>>
        <div class="input-group mb-1">
          <?php if (isset($search)) : ?>
            <a class="btn btn-primary searchback" href="coupon.php?status=1&p=1" role="button"><i class="fa-solid fa-angle-left"></i></a>
          <?php endif; ?>
          <input type="search" class="form-control ps-3" placeholder="請輸入優惠券名稱或代碼" name="search" value="<?php if (isset($search)) {
                                                                                                          echo $search;
                                                                                                        } ?>">
          <input type="hidden" name="p" value="1">
          <button class="btn btn-primary" type="submit" id="button-addon2">搜尋 <i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </form>

      <form action="" <?php if (isset($search)) {
                        echo "style=display:none";
                      } ?>>
        <div class="row mb-4 d-flex align-items-center hstack text-end justify-content-center">
          <?php if (isset($Timestart)) : ?>
            <div class="col-1">
              <a class="btn btn-primary" href="coupon.php?status=1&p=1" role="button"><i class="fa-solid fa-angle-left"></i></a>
            </div>

          <?php endif; ?>
          <div class="col-1">
            <div class="label label-form">開始日期:</div>
          </div>
          <div class="col-2">
            <input type="date" name="Timestart" id="" class="form-control form-control-sm">
          </div>
          <div class="col-1 text-center">~</div>
          <div class="col-1">結束日期:</div>
          <div class="col-2">
            <input type="date" name="Timeend" id="" class="form-control form-control-sm">
          </div>
          <div class="col-1">
            <button type="submit" class="btn btn-primary">搜尋 <i class="fa-solid fa-magnifying-glass"></i></button>
          </div>

        </div>
      </form>

      <div class="row" <?php if (isset($search) || isset($Timestart)) {
                          echo "style=display:none";
                        } ?>>
        <div class="col mb-4">
          <span>狀態:</span>
          <a class="btn btn-warning btn-sm" href="coupon.php?status=1&p=1">所有</a>
          <a class="btn btn-warning btn-sm" href="coupon.php?status=2&p=1">可使用</a>
          <a class="btn btn-warning btn-sm" href="coupon.php?status=3&p=1">已停用</a>
          <a class="btn btn-warning btn-sm" href="coupon.php?status=4&p=1">%數折扣</a>
          <a class="btn btn-warning btn-sm" href="coupon.php?status=5&p=1">金額折扣</a>
        </div>
        <div class="col text-end">
          <a class="btn btn-primary" href="./coupon-add.php">新增 <i class="fa-solid fa-plus"></i></a>
        </div>
      </div>

      <?php if ($rowCount > 0) : ?>
        <span>共<?php if (!isset($search) && !isset($Timestart)) {
                  echo $TotalCount;
                } elseif (isset($search)) {
                  echo $searchCountAll;
                } elseif (isset($Timestart)) {
                  echo $searchTimeCount;
                } ?>張</span>

        <table class="table table-bordered table-striped">
          <thead>
            <tr class="text-center">
              <th>ID <a role="button" href="coupon.php?status=<?= $status ?>&p=<?= $p ?>&order=<?php echo ($order == 1) ? 2 : 1; ?>" <?php if (isset($search) || isset($Timestart)) {
                                                                                                                                        echo "style=display:none";
                                                                                                                                      } ?>><i class="fa-solid fa-sort"></i></a></th>
              <th>優惠券名稱</th>
              <th>代碼</th>
              <th>種類</th>
              <th>面額 <a role="button" href="coupon.php?status=<?= $status ?>&p=<?= $p ?>&order=<?php echo ($order == 3) ? 4 : 3; ?>" <?php if (isset($search) || isset($Timestart)) {
                                                                                                                                        echo "style=display:none";
                                                                                                                                      } ?>><i class="fa-solid fa-sort"></i></a></th>
              <th>開始日期 <a role="button" href="coupon.php?status=<?= $status ?>&p=<?= $p ?>&order=<?php echo ($order == 5) ? 6 : 5; ?>" <?php if (isset($search) || isset($Timestart)) {
                                                                                                                                          echo "style=display:none";
                                                                                                                                        } ?>><i class="fa-solid fa-sort"></i></a></th>
              <th>結束日期 <a role="button" href="coupon.php?status=<?= $status ?>&p=<?= $p ?>&order=<?php echo ($order == 7) ? 8 : 7; ?>" <?php if (isset($search) || isset($Timestart)) {
                                                                                                                                          echo "style=display:none";
                                                                                                                                        } ?>><i class="fa-solid fa-sort"></i></a></th>
              <th>可使用次數 <a role="button" href="coupon.php?status=<?= $status ?>&p=<?= $p ?>&order=<?php echo ($order == 9) ? 10 : 9; ?>" <?php if (isset($search) || isset($Timestart)) {
                                                                                                                                            echo "style=display:none";
                                                                                                                                          } ?>><i class="fa-solid fa-sort"></i></a></th>
              <th>最低消費金額 <a role="button" href="coupon.php?status=<?= $status ?>&p=<?= $p ?>&order=<?php echo ($order == 11) ? 12 : 11; ?>" <?php if (isset($search) || isset($Timestart)) {
                                                                                                                                              echo "style=display:none";
                                                                                                                                            } ?>><i class="fa-solid fa-sort"></i></a></th>
              <th>優惠券狀態</th>
              <th>詳細資訊</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($search)) : ?>
              <?php if ($searchCount > 0) : ?>
                <?php foreach ($rowsSearch as $row) : ?>
                  <tr class="text-center">
                    <td class=""><?= $row["id"] ?></td>
                    <td><?= $row["name"] ?></td>
                    <td><?= $row["coding"] ?></td>
                    <td><?= $row["option"] ?></td>
                    <td><?= $row["discount"] ?></td>
                    <td><?= $row["time_start"] ?></td>
                    <td><?= $row["time_end"] ?></td>
                    <td><?= $row["use_time"] ?></td>
                    <td>$<?= number_format($row["use_restrict"]) ?></td>
                    <td><?= $row["use_condition"] ?></td>
                    <td>
                      <div class="d-flex justify-content-center gap-2">
                        <a class="btn btn-primary btn-sm" href="./coupon-detail.php?id=<?= $row["id"] ?>"><i class="fa-solid fa-receipt"></i></a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <br>
                <h3 class="text-danger">沒有相符合的優惠券</h3>
              <?php endif; ?>
            <?php else : ?>
              <?php foreach ($rows as $row) : ?>
                <tr class="text-center">
                  <td><?= $row["id"] ?></td>
                  <td><?= $row["name"] ?></td>
                  <td><?= $row["coding"] ?></td>
                  <td><?= $row["option"] ?></td>
                  <td><?= $row["discount"] ?></td>
                  <td><?= $row["time_start"] ?></td>
                  <td><?= $row["time_end"] ?></td>
                  <td><?= $row["use_time"] ?></td>
                  <td>$<?= number_format($row["use_restrict"]) ?></td>
                  <td><?= $row["use_condition"] ?></td>
                  <td>
                    <div class="d-flex justify-content-center gap-2">
                      <a class="btn btn-primary btn-sm" href="./coupon-detail.php?id=<?= $row["id"] ?>"><i class="fa-solid fa-receipt"></i></a>
                      <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $row["id"] ?>"><i class="fa-regular fa-trash-can"></i></button>
                    </div>
                  </td>
                </tr>
                <!-- 刪除彈出視窗 -->
                <div class="modal fade" id="exampleModal<?= $row["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">刪除優惠券?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        確認刪除優惠券?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">取消</button>
                        <a type="button" role="button" class="btn btn-danger" href="couponDelete.php?id=<?= $row["id"] ?>">刪除</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>
          </tbody>

        </table>
        <nav <?php if (isset($Timestart) || isset($Timeend)) {
                echo "style=display:none";
              } ?>>
          <ul class="pagination pagination-sm">
            <?php if (empty($search)) : ?>
              <?php for ($i = 1; $i <= $pageCount; $i++) : ?>
                <li class="page-item <?php if ($i == $p) echo "active" ?>"><a class="page-link" href="coupon.php?status=<?= $status ?>&p=<?= $i ?>&order=<?= $order ?>"><?= $i ?></a></li>
              <?php endfor; ?>
            <?php elseif (isset($search)) : ?>
              <?php for ($i = 1; $i <= $pageSearchCount; $i++) : ?>
                <li class="page-item <?php if ($i == $p) echo "active" ?>"><a class="page-link" href="coupon.php?search=<?= $search ?>&p=<?= $i ?>"><?= $i ?></a></li>
              <?php endfor; ?>
            <?php endif; ?>
          </ul>
        </nav>
      <?php else : ?>
        <br>
        <h3 class="text-danger">沒有相符合的優惠券</h3>
      <?php endif; ?>

    </div>
    <!-- End Navbar -->
  </main>
  <!-- 右下設定 -->
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">更改UI</h5>
          <p>請選擇喜愛的配色</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.0"></script>
  <?php include("./js.php") ?>
</body>

</html>