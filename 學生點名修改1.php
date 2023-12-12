<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>線上座位點名和評分整合系統</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet" />
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet" />


<body class="bg-theme bg-theme1">

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="index.html">
          <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">線上座位點名和評分整合系統</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">選項</li>
        <li>
        <li>
          <a href="index.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>首頁</span>
          </a>
        </li>
        <li>
          <a href="學生座位編排.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>學生座位編排</span>
          </a>
        </li>

        <li>
          <a href="學生評分1.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>學生評分</span>
          </a>
        </li>
        <li>
          <a href="學生評分修改1.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>學生評分修改</span>
          </a>
        </li>
        <li>
          <a href="學生點名1.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>學生點名</span>
          </a>
        </li>
        <li>
          <a href="學生點名查詢1.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>學生點名查詢</span>
          </a>
        </li>
        <li>
          <a href="學生點名修改1.php">
            <i class="zmdi zmdi-view-dashboard"></i> <span>學生點名修改</span>
          </a>
        </li>
      </ul>

    </div>
    <!--End sidebar-wrapper-->

    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>

        </ul>

        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
            <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                <div class="media-body">
                  <h6 class="mt-2 user-account" style="color: white;"><?PHP echo $_SESSION["帳號"] ?></h6>
                  <p class="user-role" style="color: white;"><?PHP echo $_SESSION["角色"] ?></p>
                </div>
              </div>
            </a>
          <li class="dropdown-divider"></li>
          <a href="logout.php">
            <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li>
          </a>
        </ul>
        </li>
        </ul>
      </nav>
    </header>
    <!--End topbar header-->

    <div class="clearfix"></div>

    <div class="content-wrapper">
      <div class="container-fluid">

        <!--Start Dashboard Content-->

        <!-- 前端代码 -->

        <title>學生點名</title>
        <style>
          /* 添加一些基本的CSS樣式 */
          /* 調整輸入框和選擇框的樣式 */
          input[type="number"],
          select {
            height: 35px;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 5px 10px;
            width: 150px;
            /* 設置一個較小的固定寬度 */
          }

          /* 調整按鈕的樣式 */
          .btn-success {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
          }

          .btn-success:hover {
            background-color: #45a049;
          }

          /* 調整標籤的顯示方式 */
          label {
            display: inline-block;
            margin-bottom: 10px;
            font-weight: bold;
          }

          /* 調整表單元素的布局 */
          .form-group {
            margin-bottom: 15px;
          }

          select {
            width: 200px;
            /* 根据需要调整宽度 */
            padding: 5px;
            border-radius: 4px;
            border: 1px solid #ccc;
          }

          select option {
            background: white;
            /* 设置选项背景为白色 */
            color: black;
            /* 设置选项文字为黑色 */
          }

          /* 针对选择框本身 */
          select {
            background: white;
            /* 设置下拉框背景为白色 */
          }

          table {
            width: 100%;
            border-collapse: collapse;
          }

          th,
          td {
            border: 1px solid black;
            padding: 15px;
            /* 增加格子內的間距 */
            text-align: left;
          }

          th {
            background-color: hsla(168, 100%, 50%, 0.3);
          }
        </style>
        </head>

        <body>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
          <script>
            async function loadAttendanceRecords() {
              try {
                const response = await axios.get('學生點名修改.php', {
                  params: {
                    statusFilter: "遲到,缺席"
                  }
                });
                if (response.data.error) {
                  console.error(response.data.error);
                  return;
                }
                displayAttendanceRecords(response.data);
              } catch (error) {
                console.error(error);
                document.getElementById('attendanceResult').innerHTML = '加載數據時出錯';
              }
            }


            function displayAttendanceRecords(records) {
              if (!Array.isArray(records)) {
                console.error('Records is not an array:', records);
                return;
              }
              let resultHtml = '<table>';
              resultHtml += '<tr><th>學號</th><th>姓名</th><th>課程</th><th>點名時間</th><th>出席狀態</th><th>出席狀態修改</th></tr>';
              records.forEach(record => {
                resultHtml += `<tr>
            <td>${record.學號}</td>
            <td>${record.姓名}</td>
            <td>${record.課程名稱}</td>
            <td>${record.點名時間}</td>
            <td>
                <select id="status-${record.學號}">
                    <option value="出席" ${record.出席狀態 === '出席' ? 'selected' : ''}>出席</option>
                    <option value="遲到" ${record.出席狀態 === '遲到' ? 'selected' : ''}>遲到</option>
                    <option value="缺席" ${record.出席狀態 === '缺席' ? 'selected' : ''}>缺席</option>
                </select>
            </td>
            <td>
                <button onclick="updateAttendance('${record.學號}')">送出</button>
            </td>
        </tr>`;
              });
              document.getElementById('attendanceResult').innerHTML = resultHtml;
            }

            document.addEventListener('DOMContentLoaded', loadAttendanceRecords);

            function updateAttendance(studentId) {
              const newStatus = document.getElementById(`status-${studentId}`).value;
              axios.post('更新.php', {
                  studentId: studentId,
                  newStatus: newStatus
                })
                .then(response => {
                  // 處理回應
                  console.log(response.data);
                })
                .catch(error => {
                  console.error(error);
                });
            }
          </script>
          <div id="attendanceResult" class="mt-3"></div>
        </body>

</html>



<!--start overlay-->
<div class="overlay toggle-menu"></div>
<!--end overlay-->

</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->

<!--Start footer-->


<!--start color switcher-->
<div class="right-sidebar">
  <div class="switcher-icon">
    <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
  </div>
  <div class="right-sidebar-content">

    <p class="mb-0">Gaussion Texture</p>
    <hr>

    <ul class="switcher">
      <li id="theme1"></li>
      <li id="theme2"></li>
      <li id="theme3"></li>
      <li id="theme4"></li>
      <li id="theme5"></li>
      <li id="theme6"></li>
    </ul>

    <p class="mb-0">Gradient Background</p>
    <hr>

    <ul class="switcher">
      <li id="theme7"></li>
      <li id="theme8"></li>
      <li id="theme9"></li>
      <li id="theme10"></li>
      <li id="theme11"></li>
      <li id="theme12"></li>
      <li id="theme13"></li>
      <li id="theme14"></li>
      <li id="theme15"></li>
    </ul>

  </div>
</div>
<!--end color switcher-->

</div><!--End wrapper-->

<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="assets/js/sidebar-menu.js"></script>
<!-- loader scripts -->
<script src="assets/js/jquery.loading-indicator.js"></script>
<!-- Custom scripts -->
<script src="assets/js/app-script.js"></script>
<!-- Chart js -->

<script src="assets/plugins/Chart.js/Chart.min.js"></script>

<!-- Index js -->
<script src="assets/js/index.js"></script>


</body>

</html>