<?php
include 'C:\xampp\htdocs\baseball-P\db_connect.php';

$perPage = 8;
$sql_Search = "SELECT * FROM product_info WHERE valid=1";
$result_Search = $conn->query($sql_Search);
$totalCount = $result_Search->num_rows;
$pageCount = ceil($totalCount / $perPage);

if (isset($_GET["order"])) {
  $order = $_GET["order"];
  if ($order == 1) {
    $orderString = "ORDER BY ID ASC";
  } elseif ($order == 2) {
    $orderString = "ORDER BY ID DESC";
  }
}
if (isset($_GET["search"])) {
  $search = $_GET["search"];
  $sql = "SELECT * FROM product_info WHERE class LIKE '%$search%'AND valid=1 OR other LIKE '%$search%' AND valid=1";
} elseif (isset($_GET["p"])) {
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <!-- 網頁favcon -->
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    類別管理主頁
  </title>
  <!-- title記得要修改 -->


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

  <!-- 新增自己的css檔案 -->
  <?php
  include("../assets/css/PJ.php");
  ?>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <!-- 回首頁連結 -->
      <a class="navbar-brand m-0" href="">
        <!-- LOGO -->
        <img src=" ../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">棒球好玩家</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">會員管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white " href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">訂單管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white active" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">商品管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">租借管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">類別管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">優惠券管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">課程管理</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- 超連結 -->
          <a class="nav-link text-white" href="#">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">文章管理</span>
          </a>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Template</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Template</h6>
        </nav>
      </div>
    </nav>
    <div class="container">
      <!-- CODE貼這裡~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
      <h2>類別列表</h2>
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
        <table class="table table-bordered page1_PJ table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>主類別</th>
              <th>子類別</th>
              <th>上架狀態</th>
              <th>詳細信息</th>
              <th>管理功能</th>
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
                    <i class="fas fa-info-circle fa-fw"></i>
                  </a>

                </td>
                <td class="col data-column">
                  <div class="page1_PJ-icon">
                    <div><a href="alterCategory.php?id=<?= $row["ID"] ?>">
                        <i class="fa-solid fa-pen-to-square fa-fw"></i>
                      </a>
                    </div>

                    <div><a href="delate.php?id=<?= $row["ID"] ?>">
                        <i class="fa-solid fa-trash" style="color: #ff0a0a;"></i></a>
                    </div>
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





      <!-- code結束 -->
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
  <!-- 如果要放自己的js檔案放在asset裡 -->


</body>

</html>