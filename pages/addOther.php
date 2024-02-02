<?php
include("../pages/db_connect.php");
$sql = "SELECT * FROM product_info";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <!-- 網頁favcon -->
    <<<<<<< HEAD:pages/addclass.php <link rel="icon" type="image/png" href="../assets/img/favicon.png">
        =======
        <link rel="icon" type="image/png" href="../assets/img/694606.png">
        >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
        <title>
            新增other
        </title>
        <!-- !    title要改名 -->
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
        <<<<<<< HEAD:pages/addclass.php <link href="../assets/css/PJ.css" rel="stylesheet" />

        <?php
        include("../assets/css/PJ.php");
        ?>
        =======
        >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
</head>

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
            <!-- 回首頁連結 -->
            <a class="navbar-brand m-0" href="#">
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
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white" href="#">
                        =======
                        <a class="nav-link text-white" href="./test.php">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">會員管理</span>
                        </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <a class="nav-link text-white " href="./test.php">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">訂單管理</span>
                    </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white active" href="#">
                        =======
                        <a class="nav-link text-white active" href="./test.php">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">商品管理</span>
                        </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white" href="#">
                        =======
                        <a class="nav-link text-white" href="./test.php">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">租借管理</span>
                        </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white" href="#">
                        =======
                        <a class="nav-link text-white" href="./test.php">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">類別管理</span>
                        </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white" href="#">
                        =======
                        <a class="nav-link text-white" href="./coupon.php?status=1&p=1">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">優惠券管理</span>
                        </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white" href="#">
                        =======
                        <a class="nav-link text-white" href="./test.php">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">課程管理</span>
                        </a>
                </li>
                <li class="nav-item">
                    <!-- 超連結 -->
                    <<<<<<< HEAD:pages/addclass.php <a class="nav-link text-white" href="#">
                        =======
                        <a class="nav-link text-white" href="./test.php">
                            >>>>>>> 5821f34bf81338ce6f31c3b8e3a20f1ba93c4963:template.php
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

            <!-- CODE貼這裡~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
            <h2 class="mt-3 mb-2">新增other</h2>

            <div class="mb-2"><a href="category_all.php">
                    <i class="fa-solid fa-house fa-fw"></i>
                </a></div>


            <form action="add_other.php" method="post">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
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
                    <div class="page4_PJ-btn">
                        <div></div>
                        <div></div>
                        <div></div>
                        <button type="submit" class="btn btn-primary  ">
                            新增
                        </button>
                        <div></div>
                        <button type="reset" class="btn btn-reset btn-danger">清空</button>
                        <div></div>
                        <div></div>
                        <div></div>

                    </div>


                </div>

            </form>


            <!-- code貼完位置 -->
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