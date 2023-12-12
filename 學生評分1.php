<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>線上座位點名和評分整合系統</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php">
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

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">

      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>

 
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
            <h6 class="mt-2 user-account" style="color:White;"><?PHP echo $_SESSION["帳號"]?></h6>
            <p class="user-role" style="color:White;"><?PHP echo $_SESSION["角色"]?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <a href="logout.php"> <li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>
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
  <!DOCTYPE html>
<html>
<head>
    <title>學生評分表單</title>
    <style>
        /* 添加一些基本的CSS樣式 */
         /* 調整輸入框和選擇框的樣式 */
         input[type="number"], select {
          height: 35px;
          border: 1px solid #ccc;
          border-radius: 4px;
          padding: 5px 10px;
          width: 150px; /* 設置一個較小的固定寬度 */
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
        width: 200px;  /* 根据需要调整宽度 */
        padding: 5px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
    select option {
      background: white; /* 设置选项背景为白色 */
      color: black; /* 设置选项文字为黑色 */
  }
  
  /* 针对选择框本身 */
  select {
      background: white; /* 设置下拉框背景为白色 */
  }
    </style>
</head>
<body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    let selectedStudents = [];
    let selectedStudentData = [];

    async function getData() {
        try {
            const response = await axios.get('學生名單.php');
            selectedStudents = response.data;
            generateStudentList();
        } catch (error) {
            console.error(error);
        }
    }

    // 動態生成學生列表
    function generateStudentList() {
      const studentSelect = document.getElementById('studentSelect');
      studentSelect.innerHTML = ''; // 清空現有選項

      selectedStudents.forEach((student, index) => {
          const option = document.createElement('option');
          option.value = student.學號;
          option.text = `${student.學號} - ${student.姓名}`;
          studentSelect.appendChild(option);
      });
  }

  function saveTableData() {
    // 獲取評分、課程名稱和上課裝況的數值
    const score = document.getElementById('score').value;
    const course = document.getElementById('course').value;
    const performance = document.getElementById('performance').value;

    // 從下拉式選單中獲取選中的學生
    let selectedOptions = document.getElementById('studentSelect').selectedOptions;
    let selectedStudents = Array.from(selectedOptions).map(option => {
        let [學號, 姓名] = option.text.split(' - ');
        return { 學號, 姓名 };
    });

    // 檢查評分是否在允許的範圍內 (1 到 100)
    if (score < 1 || score > 100 || isNaN(score)) {
        Swal.fire({
            title: '錯誤',
            text: '評分必須是 1 到 100 之間的數字。',
            icon: 'error',
            confirmButtonText: '確定'
        });
        return;
    }

    // 檢查是否選擇了學生
    if (selectedStudents.length === 0) {
        Swal.fire({
            title: '提醒',
            text: '請選擇至少一名學生進行評分。',
            icon: 'warning',
            confirmButtonText: '確定'
        });
        return;
    }

    // 構建包含數據的對象
    const tableData = {
        score,
        course,
        performance,
        selectedStudents: selectedStudents
    };

    // 發送 POST 請求
    axios.post('學生評分.php', JSON.stringify(tableData), {
        headers: {
            'Content-Type': 'application/json'
        }
    })
    .then(response => {
        if(response.data.success) {
            Swal.fire({  // 使用 SweetAlert 顯示成功消息
                title: '成功',
                text: '評分數據已成功保存到資料庫。',
                icon: 'success',
                confirmButtonText: '確定'
            });
        } else {
            Swal.fire({  // 使用 SweetAlert 顯示錯誤消息
                title: '錯誤',
                text: response.data.error,
                icon: 'error',
                confirmButtonText: '確定'
            });
        }
    })
    .catch(error => {
        Swal.fire({  // 使用 SweetAlert 顯示錯誤消息
            title: '發送錯誤',
            text: '保存評分數據時出現錯誤。',
            icon: 'error',
            confirmButtonText: '確定'
        });
    });
}
    
    
  // 在頁面加載時獲取學生數據
  getData();
</script>
<!-- 學生列表 -->
<div class="form-group">
  <label for="studentSelect">學生名單：</label>
  <select id="studentSelect" name="student">
  </select>
</div>
<br><br>
<!-- 課程名稱下拉式選單 -->
<label for="course">課程名稱：</label>
<select name="course" id="course">
    <option value="數學">數學</option>
    <option value="國文">國文</option>
    <option value="英文">英文</option>
    <option value="網頁設計">網頁設計</option>
</select>
<br><br>

<!-- 上課裝況下拉式選單 -->
<label for="performance">上課裝況：</label>
<select name="performance" id="performance">
    <option value="優良">優良</option>
    <option value="良好">良好</option>
    <option value="一般">一般</option>
    <option value="差">差</option>
</select>
<br><br>

<!-- 評分輸入 -->
<div class="form-group">
  <label for="score">上課評分：</label>
  <input type="number" id="score" name="score" min="1" max="100">
</div>
<br><br>


<!-- 提交按鈕 -->
 <div class="form-group">
        <button class="btn btn-success" id="saveButton" onclick="saveTableData()">提交評分</button>
    </div>
</form>
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
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          康寧大學
        </div>
      </div>
    </footer>
	<!--End footer-->
	
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