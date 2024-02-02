<?php

$id = $_GET["id"];

require_once("./db_connect.php");


$sql = "SELECT * FROM coupon where id = $id and valid=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <!-- 網頁favcon -->
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    編輯優惠券
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
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              <span class="nav-link-text ms-1">訂單管理</span>
            </button>
          </div>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">訂單列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
                <span class="nav-link-text ms-1">訂單管理</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header  ">
            <button class="nav-link text-white accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
              <span class="nav-link-text ms-1">租借管理</span>
            </button>
          </div>
          <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">租借列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
                <span class="nav-link-text ms-1">租借管理</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
              <span class="nav-link-text ms-1">類別管理</span>
            </button>
          </div>
          <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">類別列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
                <span class="nav-link-text ms-1">類別管理</span>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item accordion-item">
          <!-- 超連結 -->
          <div class="accordion-header">
            <button class="nav-link text-white accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
              <span class="nav-link-text ms-1">優惠券管理</span>
            </button>
          </div>
          <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">優惠券列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
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
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">課程列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
                <span class="nav-link-text ms-1">新增課程</span>
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
              <a class="text-white  nav-ader" href="#">
                <span class="nav-link-text ms-1">文章列表</span>
              </a>
              <a class="text-white nav-ader" type="button">
                <span class="nav-link-text ms-1">文章管理</span>
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Template</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Template</h6>
        </nav>
      </div>
    </nav>
    <div class="container">
      <form action="couponEdit.php" class="needs-validation" novalidate>
        <div class="py-2">
          <h2 class="text-center">編輯優惠券</h2>
        </div>
        <div class="py-2">
          <a type="button" class="btn btn-primary" href="./coupon-detail.php?id=<?= $row["id"] ?>"><i class="fa-solid fa-angle-left"></i>取消編輯</a>
        </div>

        <table class="table table-bordered">
          <tr>
            <th>ID</th>
            <input type="hidden" name="id" value="<?= $row["id"] ?>">
            <td class="ps-3"><?= $row["id"] ?></td>
          </tr>
          <tr>
            <th>優惠券名稱</th>
            <td><input type="text" class="form-control ps-3" name="name" value="<?= $row["name"] ?>" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">
                請輸入優惠券名稱。
              </div>
            </td>
          </tr>
          <tr>
            <th>優惠券代碼</th>
            <td><input type="text" class="form-control ps-3" name="coding" id="coding" minlength="10" value="<?= $row["coding"] ?>" required>
              <div class="invalid-feedback">
                請輸入優惠券代碼。
              </div>
              <button type="button" class="btn btn-primary mt-1" id="btnRandom">取得隨機代碼</button>

            </td>
          </tr>
          <tr>
            <th>優惠券種類</th>
            <td><select class="form-select ps-3" name="option" id="option">
                <option value="%數折扣" id="percent" <?php
                                                  if ($row["option"] == "%數折扣") {
                                                    echo "selected";
                                                  }
                                                  ?>>%數折扣</option>
                <option value="金額折扣" id="price" <?php
                                                if ($row["option"] == "金額折扣") {
                                                  echo "selected";
                                                }
                                                ?>>金額折扣</option>
              </select></td>
          </tr>
          <tr>
            <th>優惠券面額</th>
            <td>
              <div id="option-detail-percent" <?php if ($row["option"] == "金額折扣") {
                                                echo "style=display:none";
                                              } ?>>
                <select class="form-select ps-3" name="option-detail" id="percent-detail">
                  <option value="0.9" <?php if ($row["discount"] == 0.9) {
                                        echo "selected";
                                      } ?>>90%</option>
                  <option value="0.8" <?php if ($row["discount"] == 0.8) {
                                        echo "selected";
                                      } ?>>80%</option>
                  <option value="0.7" <?php if ($row["discount"] == 0.7) {
                                        echo "selected";
                                      } ?>>70%</option>
                  <option value="0.6" <?php if ($row["discount"] == 0.6) {
                                        echo "selected";
                                      } ?>>60%</option>
                  <option value="0.5" <?php if ($row["discount"] == 0.5) {
                                        echo "selected";
                                      } ?>>50%</option>
                  <option value="0.4" <?php if ($row["discount"] == 0.4) {
                                        echo "selected";
                                      } ?>>40%</option>
                  <option value="0.3" <?php if ($row["discount"] == 0.3) {
                                        echo "selected";
                                      } ?>>30%</option>
                  <option value="0.2" <?php if ($row["discount"] == 0.2) {
                                        echo "selected";
                                      } ?>>20%</option>
                  <option value="0.1" <?php if ($row["discount"] == 0.1) {
                                        echo "selected";
                                      } ?>>10%</option>
                </select>
              </div>
              <div id="option-detail-price" <?php if ($row["option"] == "%數折扣") {
                                              echo "style=display:none";
                                            } else {
                                              echo "style=display:block";
                                            } ?>>
                <input type="number" class="form-control ps-3" name="option-detail" min="0" step="0.1" id="price-detail" value="<?php if ($row["option"] == "金額折扣") {
                                                                                                                                  echo $row["discount"];
                                                                                                                                } elseif ($row["option"] == "%數折扣") {
                                                                                                                                  echo $row["discount"];
                                                                                                                                } ?>" required>
                <div class="valid-feedback"></div>
                <div class="invalid-feedback" id="price-detail-invalid">
                  請輸入折扣金額。
                </div>
              </div>

            </td>
          </tr>
          <tr>
            <th>優惠券敘述</th>
            <td><textarea name="description" id="" cols="60" rows="5" class="form-control ps-3" required><?= $row["description"] ?></textarea>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">
                請輸入優惠券敘述。
              </div>
            </td>
          </tr>
          <tr>
            <th>開始日期</th>
            <td><input type="date" name="start-time" id="timeStart" class="form-control ps-3" value="<?= $row["time_start"] ?>" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">
                請選擇開始時間。
              </div>
            </td>
          </tr>
          <tr>
            <th>結束日期</th>
            <td><input type="date" name="end-time" id="timeEnd" class="form-control ps-3" value="<?= $row["time_end"] ?>" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">
                請選擇結束時間。
              </div>
            </td>
          </tr>
          <tr>
            <th>可用次數</th>
            <td><input type="number" class="form-control ps-3" name="use-time" min="0" value="<?= $row["use_time"] ?>" required>
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">
                請輸入可用次數。
              </div>
            </td>
          </tr>
          <tr>
            <th>最低消費金額</th>
            <td><input type="number" class="form-control ps-3" name="use-restrict" value="<?= $row["use_restrict"] ?>" required min="0">
              <div class="valid-feedback"></div>
              <div class="invalid-feedback">
                請輸入最低消費金額(不得低於0)。
              </div>
            </td>
          </tr>
          <tr>
            <th>優惠券狀態</th>
            <td><select class="form-select ps-3" name="valid-option">
                <option value="可使用" id="canUse" <?php if ($row["use_condition"] == "可使用") {
                                                  echo "selected";
                                                } ?>>可使用</option>
                <option value="已停用" id="cantUse" <?php if ($row["use_condition"] == "已停用") {
                                                    echo "selected";
                                                  } ?>>已停用</option>
              </select></td>
          </tr>
          <tr>
            <th>建立時間</th>
            <td>
              <?= $row["created_at"] ?>
            </td>
          </tr>
          <tr>
            <th>最後更新時間</th>
            <td>
              <?php
              if ($row["update_time"] != NULL) {
                echo $row["update_time"];
              } else {
                echo $row["created_at"];
              }
              ?>
            </td>
          </tr>
        </table>
        <div class="py-1 text-center">
          <button class="btn btn-primary" type="submit">更新</button>
        </div>
      </form>

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
  <script src="../assets/js/coupon/coupon-edit.js"></script>
  <?php include("./js.php") ?>
</body>

</html>