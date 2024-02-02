<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <!-- 網頁favcon -->
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    新增優惠券
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
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Template</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Template</h6>
        </nav>
      </div>
    </nav>
    <div class="container">
      <div class="py-2">
        <h2 class="text-center">新增優惠券</h2>
      </div>
      <form action="couponAdd.php" class="needs-validation" novalidate>
        <div>
          <label for="name" class="label label-form mb-1">優惠券名稱:</label>
          <input type="text" class="form-control mb-2 ps-3" id="name" name="name" placeholder="請輸入優惠券名稱" required>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            請輸入優惠券名稱。
          </div>
        </div>
        <div>
          <label for="coding" class="label label-form mb-1">優惠券代碼:</label>
          <input type="text" class="form-control mb-1 ps-3" id="coding" name="coding" placeholder="請輸入優惠券代碼，共10碼大寫英文及數字" required minlength="10">
          <button type="button" class="btn btn-primary d-flex mb-2" id="btnRandom">取得隨機代碼</button>
          <div class="invalid-feedback">
            請輸入優惠券代碼。
          </div>
        </div>


        <label for="option" class="label label-form mb-1">選擇優惠券種類:</label>
        <div class="hstack">
          <div class="form-check me-3">
            <input class="form-check-input" type="radio" name="option" id="percent" value="%數折扣" checked="true">
            <label class="form-check-label mb-2" for="option">%數折扣</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="option" id="price" value="金額折扣">
            <label class="form-check-label mb-2" for="option">金額折扣</label>
          </div>
        </div>
        <label for="option-detail" class="label label-form mb-1">優惠券面額:</label>
        <select class="form-select mb-2 ps-3" name="option-detail" id="percent-detail" required>
          <option selected value="0.9">90%</option>
          <option value="0.8">80%</option>
          <option value="0.7">70%</option>
          <option value="0.6">60%</option>
          <option value="0.5">50%</option>
          <option value="0.4">40%</option>
          <option value="0.3">30%</option>
          <option value="0.2">20%</option>
          <option value="0.1">10%</option>
        </select>
        <input type="number" min="0" step="0.1" class="form-control mb-2 ps-3" id="price-detail" name="option-detail" placeholder="請輸入折扣金額" required>
        <div class="valid-feedback"></div>
        <div class="invalid-feedback" id="price-detail-invalid">
          請輸入折扣金額。
        </div>




        <div>
          <label for="description" class="label label-form mb-1">優惠券敘述:</label>
          <textarea name="description" id="" cols="30" rows="5" class="form-control ps-3" required></textarea>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            請輸入優惠券敘述。
          </div>
        </div>

        <div class="row my-2">
          <div class="col-1">
            <label for="start-time" class="label label-form mb-1">開始日期:</label>
          </div>
          <div class="col-2">
            <input type="date" class="form-control ps-3" name="start-time" required id="timeStart">
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
              請選擇開始時間。
            </div>
          </div>
          <div class="col-1">
            <label for="end-time" class="label label-form mb-1">結束日期:</label>
          </div>
          <div class="col-2">
            <input type="date" class="form-control ps-3" name="end-time" required id="timeEnd">
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
              請選擇結束時間。
            </div>
          </div>
        </div>
        <div>
          <label for="use-time" class="label label-form mb-1">可用次數:</label>
          <input type="number" class="form-control mb-2 ps-3" id="use-time" name="use-time" placeholder="" min="0" required>
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            請輸入可用次數。
          </div>
        </div>
        <div>
          <label for="use-restrict" class="label label-form mb-1">使用最低消費金額:</label>
          <input type="number" class="form-control mb-2 ps-3" id="name" name="use-restrict" placeholder="" required min="0">
          <div class="valid-feedback"></div>
          <div class="invalid-feedback">
            請輸入最低消費金額(不得低於0)。
          </div>
        </div>

        <label for="valid-option" class="label label-form mb-1">優惠券狀態:</label>
        <div class="hstack ">
          <div class="form-check me-3">
            <input class="form-check-input" type="radio" name="valid-option" id="canUse" value="可使用" checked="true">
            <label class="form-check-label" for="valid-option">可使用</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="valid-option" id="cantUse" value="已停用">
            <label class="form-check-label" for="valid-option">已停用</label>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary my-5 me-3">送出</button>
          <a class="btn btn-danger" href="./coupon.php?status=1&p=1">取消新增</a>
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
  <script src="../assets/js/coupon/coupon-add.js"></script>
  <?php include("./js.php") ?>
</body>

</html>