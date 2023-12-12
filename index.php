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
  <!--bootstrap按鈕樣式-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!--彈出視窗樣式-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
  <!-- 加入Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="加入學生按鈕.css">

<style>
  .add-student-button {
    background-color: #007BFF; /* 藍色背景 */
    border: none; /* 無邊框 */
    color: white; /* 白色文字 */
    padding: 6px 12px; /* 內部填充 */
    text-align: center; /* 文字置中 */
    text-decoration: none; /* 無底線 */
    display: inline-block; /* 行內區塊 */
    font-size: 13px; /* 字體大小 */
    margin: 2px 1px; /* 外部邊距 */
    cursor: pointer; /* 鼠標指針變為手指 */
    border-radius: 4px; /* 圓角 */
    transition-duration: 0.3s; /* 過渡效果 */
}

.add-student-button:hover {
    background-color: white; /* 滑鼠滑過時的背景色 */
    color: #007BFF; /* 滑鼠滑過時的文字色 */
    border: 1px solid #007BFF; /* 滑鼠滑過時的邊框 */
}
#cancelExchangeButton {
  background-color: #f44336; /* 紅色背景 */
  color: white; /* 文字顏色為白色 */
  padding: 10px 20px; /* 按鈕內部的填充 */
  border: none; /* 移除邊框 */
  border-radius: 5px; /* 圓角邊框 */
  cursor: pointer; /* 當滑鼠移到按鈕上時，顯示手形圖標 */
  font-size: 16px; /* 文字大小 */
  transition: background-color 0.3s; /* 背景色過渡效果 */
}

#cancelExchangeButton:hover {
  background-color: #d32f2f; /* 當滑鼠移到按鈕上時的背景色 */
}

#cancelExchangeButton:active {
  background-color: #c62828; /* 當按下按鈕時的背景色 */
}
.table-generator {
  margin-bottom: 20px; /* 在按鈕組下方添加20像素的間距 */
}
.user-account, .user-role {
  color: black;
}
</style>
</head>

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

          </li>
        </ul>

            </ul>

            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
              <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                  alt="user avatar"></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li class="dropdown-item user-details">
                <a href="javaScript:void();">
                  <div class="media">
                    <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110"
                        alt="user avatar"></div>
                    <div class="media-body">
                      <h6 class="mt-2 user-account" style="color: black;"><?PHP echo $_SESSION["帳號"] ?></h6>
                      <p class="user-role" style="color: black;"><?PHP echo $_SESSION["角色"] ?></p>
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
        <script src="your-script.js"></script>
        <div class="container-fluid">
          <div class="row">
            <div class="container-fluid">
              <div class="row">
                <div class="col-4">
                  <div class="student-list">
                    <h3>學生名單：</h3>
                    <div>
                      <label for="student1" style="text-align: right;">
                        <input type="checkbox" name="studentList" id="student1" value="學號1">
                        學號1, 姓名: 學生1
                      </label>
                    </div>
                    <div>
                      <label for="student2" style="text-align: right;">
                        <input type="checkbox" name="studentList" id="student2" value="學號2">
                        學號2, 姓名: 學生2
                      </label>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="table-generator">
                  <div id="addedStudentCountDisplay" class="alert alert-info">已加入學生數量：0</div>
                    <label for="rows">行數：</label>
                    <input type="number" id="rows" min="1" max="10">
                    <label for="columns">列數：</label>
                    <input type="number" id="columns" min="1" max="10">
                      <label for="tableSizeSelect">選擇座位表大小：</label>
                      <select id="tableSizeSelect" onchange="updateTableSize()">
                          <option value="0*0">預設座位</option>
                          <option value="7x8">3050</option>
                          <option value="4x4">3060</option>
                          <option value="5x5">4110</option>
                          <option value="6x6">2050</option>
                          <option value="6x7">4111</option>
                          <!-- 更多行列組合選項 -->
                      </select>
                    <div class="buttons-container">
                    <button class="btn btn-primary" id="generateButton" onclick="generateTable()">生成表格</button>
                    <button class="btn btn-danger"id="clearButton" onclick="clearTable()">清空表格</button>
                    <button class="btn btn-primary" id="selectAllButton" onclick="selectAll()">全部選取</button>
                    <button class="btn btn-primary" id="deselectAllButton" onclick="deselectAll()">取消選取</button>
                    <button class="btn btn-info" id=" randomFillTableButton" onclick=" randomFillTable()">隨機填充</button>
                    <button id="exchangeButton" class="btn btn-warning" onclick="toggleExchangeMode()">座位交換</button>
            <button id="cancelExchangeButton" class="btn btn-warning" onclick="cancelExchange()" style="display: none;">取消換座位</button>
            <button id="confirmExchangeButton" class="btn btn-warning" onclick="confirmExchange()" style="display: none;">確認交換</button>
                    <button class="btn btn-success"id="saveButton" onclick="saveTableData()" id="save-button">儲存</button>
                    <button class="btn btn-secondary" id="addRowButton" onclick="addRow()">增加行</button>
                    <button class="btn btn-secondary" id="addColumnButton" onclick="addColumn()">增加列</button>
                    <button class="btn btn-secondary" id="removeRowButton" onclick="removeRow()">減少行</button>
                    <button class="btn btn-secondary" id="removeColumnButton" onclick="removeColumn()">減少列</button>
                    <style>
                      .select-seat-button {
                          background-color: #4CAF50; /* 綠色背景 */
                          border: none; /* 無邊框 */
                          color: white; /* 白色文字 */
                          padding: 8px 16px; /* 內部填充 */
                          text-align: center; /* 文字置中 */
                          text-decoration: none; /* 無底線 */
                          display: inline-block; /* 行內區塊 */
                          font-size: 14px; /* 字體大小 */
                          margin: 4px 2px; /* 外部邊距 */
                          cursor: pointer; /* 鼠標指針變為手指 */
                          border-radius: 4px; /* 圓角 */
                          transition-duration: 0.4s; /* 過渡效果 */
                      }

                      .select-seat-button:hover {
                          background-color: white; /* 滑鼠滑過時的背景色 */
                          color: #4CAF50; /* 滑鼠滑過時的文字色 */
                          border: 1px solid #4CAF50; /* 滑鼠滑過時的邊框 */
                      }
                      .buttons-container {
                        display: flex;
                        flex-wrap: wrap;
                        gap: 10px;
                        justify-content: flex-start;
                        align-items: center;
                    }

                    .buttons-container button {
                        flex: 0 0 auto;
                        margin-bottom: 10px;
                    }

                    /* 修正一個小錯誤 */
                    #randomFillButton {
                        margin-right: 10px; /* 確保隨機填充按鈕的右邊有間距 */
                    }
                  </style>

                    <div id="randomButton"></div>
                  </div>
                  <div>
                    <div>
                      <div class="col-3">
                        <div class="table">
                            <table class="table-bordered" style="background-color: rgb(139, 218, 176);" id="table">
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>


                  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js"></script>
                  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                  <script>

                  let studentData = [];
                  let selectedStudentData = [];
                  let tableData = [];
                  let selectedSeats = [];
                  let isExchangeMode = false;
                  let firstCellToExchange = null;
                  let addedStudents = []; // 用於存儲已加入表格的學生
                  let addedStudentIds = new Set();

                  // 行列數限制
                  document.getElementById('rows').addEventListener('change', function() {
                    if (this.value < 1) {
                      this.value = 1;
                      Swal.fire({
                        title: '錯誤!',
                        text: '行數不得小於1。',
                        icon: 'error',
                        confirmButtonText: '好的'
                      });
                    } else if (this.value > 10) {
                      this.value = 10;
                      Swal.fire({
                        title: '錯誤!',
                        text: '行數不得大於10。',
                        icon: 'error',
                        confirmButtonText: '好的'
                      });
                    }
                  });

                  document.getElementById('columns').addEventListener('change', function() {
                    if (this.value < 1) {
                      this.value = 1;
                      Swal.fire({
                        title: '錯誤!',
                        text: '列數不得小於1。',
                        icon: 'error',
                        confirmButtonText: '好的'
                      });
                    } else if (this.value > 10) {
                      this.value = 10;
                      Swal.fire({
                        title: '錯誤!',
                        text: '列數不得大於10。',
                        icon: 'error',
                        confirmButtonText: '好的'
                      });
                    }
                  });


                    // 當頁面加載時獲取學生名單

                    async function getData() {
                        try {
                            const response = await axios.get('學生名單.php');
                            selectedStudents = response.data;
                            generateStudentList();
                        } catch (error) {
                            console.error(error);
                        }
                    }

// 函數：根據學生學號和姓名從表格中移除學生
function removeStudentFromTable(studentID, studentName) {
    const table = document.getElementById('table');
    const cells = table.getElementsByTagName('td');

    // 遍歷所有表格儲存格
    for (let i = 0; i < cells.length; i++) {
        const cell = cells[i];
        // 檢查儲存格是否包含學生學號和姓名
        if (cell.innerHTML.includes(studentID) && cell.innerHTML.includes(studentName)) {
            // 清空儲存格的內容
            cell.innerHTML = '';
            // 調用函數將學生取消標記為已添加
            unmarkStudentAsAdded(studentID, studentName);
        }
    }
}

// 函數：從學生列表中取消標記學生為已添加
function unmarkStudentAsAdded(studentID, studentName) {
    const addedStudentList = document.querySelector('.student-list');
    const checkboxes = addedStudentList.querySelectorAll('input[type="checkbox"]');

    // 遍歷學生列表中的所有複選框
    for (let i = 0; i < checkboxes.length; i++) {
        const checkbox = checkboxes[i];
        const value = checkbox.value;
        // 檢查複選框的值是否包含學生學號和姓名
        if (value.includes(studentID) && value.includes(studentName)) {
            // 取消選中複選框
            checkbox.checked = false;
            // 將標籤的背景顏色設置為透明
            const label = checkbox.closest('label');
            label.style.backgroundColor = 'transparent';
            // 查找並從selectedStudentData陣列中刪除該學生
            const indexToRemove = selectedStudentData.findIndex(selected => selected.studentID === studentID && selected.studentName === studentName);
            if (indexToRemove !== -1) {
                selectedStudentData.splice(indexToRemove, 1);
            }
        }
    }
}



// 動態生成學生列表
function generateStudentList() {
    const studentList = document.querySelector('.student-list');
    studentList.innerHTML = '';

    selectedStudents.forEach((student, index) => {
       // 假設這是生成復選框和標籤的代碼部分
      const studentCheckbox = document.createElement('div');
      const labelContent = `學號: ${student.學號}, 姓名: ${student.姓名}`;
      studentCheckbox.innerHTML = `
          <label for="student${index + 1}" data-original-label="${labelContent}">
              <input type="checkbox" name="studentList" id="student${index + 1}" value="${student.學號 + ' ' + student.姓名}">
              ${labelContent}
          </label>
      `;

        studentList.appendChild(studentCheckbox);
    });
}


// 隨機填充表格
function randomFillTable() {
    const table = document.getElementById('table');
    const rows = parseInt(document.getElementById('rows').value);
    const columns = parseInt(document.getElementById('columns').value);

    table.innerHTML = '';
    tableData = [];
    let addedStudentCount = 0;

    if (selectedStudents.length === 0) {
        Swal.fire({
            title: '提示!',
            text: "請選擇至少一位學生。",
            icon: 'warning',
            confirmButtonText: '確定'
        });
        return;
    }

    let studentsForFilling = [...selectedStudents];
    let addedStudentIds = new Set();

    for (let i = 0; i < rows; i++) {
        const row = table.insertRow();
        const rowData = []; // 初始化每行的數據
        for (let j = 0; j < columns; j++) {
            const cell = row.insertCell();
            addStudentOrButton(cell, i + 1, j + 1, studentsForFilling, addedStudentIds, rowData);
        }
        tableData.push(rowData); // 將該行的數據添加到 tableData
    }

    function addStudentOrButton(cell, rowIndex, columnIndex, studentsForFilling, addedStudentIds, rowData) {
        cell.innerHTML = `（第${rowIndex}排第${columnIndex}個）`;

        if (studentsForFilling.length > 0) {
            const randomIndex = Math.floor(Math.random() * studentsForFilling.length);
            const selectedStudent = studentsForFilling[randomIndex];

            if (!addedStudentIds.has(selectedStudent.學號)) {
                cell.innerHTML = `學號: ${selectedStudent.學號}<br>姓名: ${selectedStudent.姓名}<br>` + cell.innerHTML;
                addedStudentIds.add(selectedStudent.學號);
                studentsForFilling.splice(randomIndex, 1);
                addedStudentCount++;
                updateAddedStudentCountDisplay(addedStudentCount);

                // 更新 tableData
                rowData.push({
                    第幾排: rowIndex,
                    第幾個: columnIndex,
                    student: selectedStudent // 添加學生資訊
                });
            } else {
                createAddButton(cell, rowIndex, columnIndex);
                rowData.push({ 第幾排: rowIndex, 第幾個: columnIndex }); // 無學生資訊的情況
            }
        } else {
            createAddButton(cell, rowIndex, columnIndex);
            rowData.push({ 第幾排: rowIndex, 第幾個: columnIndex }); // 無學生資訊的情況
        }
    }

    function createAddButton(cell, rowIndex, columnIndex) {
        const addButton = document.createElement('button');
        addButton.textContent = '加入學生';
        addButton.dataset.row = rowIndex;
        addButton.dataset.col = columnIndex;
        addButton.addEventListener('click', addStudentToCell);
        addButton.className = 'add-student-button';
        cell.appendChild(addButton);
    }
}

function updateAddedStudentCountDisplay(count) {
    const displayElement = document.getElementById('addedStudentCountDisplay');
    displayElement.textContent = `已加入學生數量：${count}`;
}






  function updateTableSize() {
    var size = document.getElementById("tableSizeSelect").value.split('x');
    var rows = parseInt(size[0]);
    var columns = parseInt(size[1]);
    var table = document.getElementById("table");
    if (selectedStudents.length === 0) {
            // 使用SweetAlert来显示漂亮的警告框
            Swal.fire({
              title: '提示!',
              text: "請選擇至少一位學生。",
              icon: 'warning',
              confirmButtonText: '確定'
            });
            return;
          }

            for (let i = 0; i < rows; i++) {
                const row = table.insertRow(i);
                const rowData = [];
                for (let j = 0; j < columns; j++) {
                    const cell = row.insertCell(j);
                    const rowIndex = i + 1;
                    const columnIndex = j + 1;

                   // 創建一個按鈕元素並添加到單元格
                    const addButton = document.createElement('button');
                    addButton.textContent = '加入學生';
                    addButton.setAttribute('data-row', rowIndex);
                    addButton.setAttribute('data-col', columnIndex);
                    addButton.addEventListener('click', addStudentToCell);
                    addButton.className = 'add-student-button';  // 新增這一行
                    cell.appendChild(addButton);


                    rowData.push({ 第幾排: rowIndex, 第幾個: columnIndex, button: addButton });
                }
                tableData.push(rowData);
            }
}

        // 生成表格
        function generateTable() {
    const table = document.getElementById('table');
    table.innerHTML = '';
    tableData = [];
    const rows = document.getElementById('rows').value;
    const columns = document.getElementById('columns').value;

    if (selectedStudents.length === 0) {
        Swal.fire({
            title: '提示!',
            text: "請選擇至少一位學生。",
            icon: 'warning',
            confirmButtonText: '確定'
        });
        return;
    }

    for (let i = 0; i < rows; i++) {
        const row = table.insertRow(i);
        const rowData = [];
        for (let j = 0; j < columns; j++) {
            const cell = row.insertCell(j);
            const rowIndex = i + 1;
            const columnIndex = j + 1;

            // 創建一個按鈕元素並添加到單元格
            const addButton = document.createElement('button');
            addButton.textContent = '加入學生';
            addButton.setAttribute('data-row', rowIndex);
            addButton.setAttribute('data-col', columnIndex);
            addButton.addEventListener('click', addStudentToCell);
            addButton.className = 'add-student-button';
            cell.appendChild(addButton);

            // 新增換行元素
            const breakElement = document.createElement('br');
            cell.appendChild(breakElement);

            // 新增文字顯示第幾排第幾個
            const textNode = document.createTextNode(`（第${rowIndex}排第${columnIndex}個）`);
            cell.appendChild(textNode);

            rowData.push({ 第幾排: rowIndex, 第幾個: columnIndex, button: addButton });
        }
        tableData.push(rowData);
    }
}




    //座位交換
    function showExchangeButtons() {
      const cells = document.getElementById("table").querySelectorAll("td");
      cells.forEach(cell => {
          const selectButton = document.createElement('button');
          selectButton.className = "select-seat-button"; // 加入CSS樣式
          selectButton.textContent = '選擇此座位';
          selectButton.style.display = 'block';
          selectButton.addEventListener('click', function() {
              if (selectedSeats.length < 2 && !cell.classList.contains('selected-seat')) {
                  cell.classList.add('selected-seat');
                  cell.style.backgroundColor = 'yellow'; // 設置背景色為黃色
                  selectedSeats.push(cell);
              } else if (cell.classList.contains('selected-seat')) {
                  cell.classList.remove('selected-seat');
                  cell.style.backgroundColor = 'rgb(139, 218, 176)'; // 將背景色設置回原來的顏色
                  const index = selectedSeats.indexOf(cell);
                  if (index > -1) {
                      selectedSeats.splice(index, 1);
                  }
              }

              // 當選擇了兩個座位時，顯示“確認交換”按鈕
              if (selectedSeats.length === 2) {
                  document.getElementById('confirmExchangeButton').style.display = 'block';
              } else {
                  document.getElementById('confirmExchangeButton').style.display = 'none';
              }
          });
          cell.appendChild(selectButton);
      });

      // 進入交換模式時，顯示「取消換座位」按鈕
      document.getElementById('cancelExchangeButton').style.display = 'block';
  }

  document.getElementById("exchangeButton").addEventListener("click", function() {
      if (isExchangeMode) {
          hideExchangeButtons();
      } else {
          showExchangeButtons();
      }
      isExchangeMode = !isExchangeMode;
  });

  document.getElementById("cancelExchangeButton").addEventListener("click", cancelExchange);


  function confirmExchange() {
                        if (selectedSeats.length === 2) {
                          // 提取两个选择的座位的学生信息
                          const studentInfo1 = selectedSeats[0].innerHTML.match(/學號: .+<br>姓名: .+<br>/)[0];
                          const studentInfo2 = selectedSeats[1].innerHTML.match(/學號: .+<br>姓名: .+<br>/)[0];

                          // 提取两个选择的座位的位置信息
                          const positionInfo1 = selectedSeats[0].innerHTML.match(/（第\d+排第\d+個）/)[0];
                          const positionInfo2 = selectedSeats[1].innerHTML.match(/（第\d+排第\d+個）/)[0];

                          // 将学生信息交换，但保留原有的位置信息
                          selectedSeats[0].innerHTML = studentInfo2 + positionInfo1;
                          selectedSeats[1].innerHTML = studentInfo1 + positionInfo2;

                          // 这里需要更新 tableData
                          const rowIndex1 = parseInt(positionInfo1.match(/\d+/g)[0]) - 1;
                          const colIndex1 = parseInt(positionInfo1.match(/\d+/g)[1]) - 1;
                          const rowIndex2 = parseInt(positionInfo2.match(/\d+/g)[0]) - 1;
                          const colIndex2 = parseInt(positionInfo2.match(/\d+/g)[1]) - 1;

                          // 交换 tableData 中的学生信息
                          let temp = tableData[rowIndex1][colIndex1].student;
                          tableData[rowIndex1][colIndex1].student = tableData[rowIndex2][colIndex2].student;
                          tableData[rowIndex2][colIndex2].student = temp;

                          // 交换完成后，将选择的座位颜色设置回原来的颜色
                          selectedSeats[0].style.backgroundColor = 'rgb(139, 218, 176)';
                          selectedSeats[1].style.backgroundColor = 'rgb(139, 218, 176)';

                          // 移除选择的座位的高亮效果
                          selectedSeats[0].classList.remove('selected-seat');
                          selectedSeats[1].classList.remove('selected-seat');
                          selectedSeats = [];

                          // 隐藏确认交换按钮
                          document.getElementById('confirmExchangeButton').style.display = 'none';

                          // 隐藏「取消换座位」按钮
                          document.getElementById('cancelExchangeButton').style.display = 'none';

                          // 隐藏交换模式下的按钮
                          hideExchangeButtons();
                        }
                      }


                      function hideExchangeButtons() {
                        const selectButtons = document.querySelectorAll('#table button');
                        selectButtons.forEach(btn => {
                          btn.style.display = 'none';
                        });
                      }

                      function cancelExchange() {
                        // 將選擇的座位顏色設置回原來的顏色
                        selectedSeats.forEach(seat => {
                          seat.style.backgroundColor = 'rgb(139, 218, 176)';
                          seat.classList.remove('selected-seat');
                        });
                        selectedSeats = []; // 清空選擇的座位

                        // 隱藏「確認交換」按鈕
                        document.getElementById('confirmExchangeButton').style.display = 'none';

                        // 隱藏「取消換座位」按鈕
                        document.getElementById('cancelExchangeButton').style.display = 'none';

                        // 隱藏選擇按鈕
                        hideExchangeButtons();
                      }

function resetSelectedSeatsStyle() {
  selectedSeats.forEach(seat => {
    seat.style.backgroundColor = 'rgb(139, 218, 176)';
    seat.classList.remove('selected-seat');
  });
  selectedSeats = [];
}

function exitExchangeMode() {
  // 隐藏取消换座位按钮
  document.getElementById('cancelExchangeButton').style.display = 'none';

  // 隐藏交换模式下的按钮
  hideExchangeButtons();
  isExchangeMode = false;
}



      function hideExchangeButtons() {
          const selectButtons = document.querySelectorAll('#table button');
          selectButtons.forEach(btn => {
              btn.style.display = 'none';
          });
      }
      function cancelExchange() {
        // 將選擇的座位顏色設置回原來的顏色
        selectedSeats.forEach(seat => {
          seat.style.backgroundColor = 'rgb(139, 218, 176)';
          seat.classList.remove('selected-seat');
        });
        selectedSeats = []; // 清空選擇的座位

        // 隱藏「確認交換」按鈕
        document.getElementById('confirmExchangeButton').style.display = 'none';

        // 隱藏「取消換座位」按鈕
        document.getElementById('cancelExchangeButton').style.display = 'none';

        // 隱藏選擇按鈕
        hideExchangeButtons();
      }



        //行數防呆
        function validateRowsAndColumns(rows, columns) {
          if (rows < 1 || rows > 10 || columns < 1 || columns > 10) {
            // 使用SweetAlert来显示漂亮的警告框
            Swal.fire({
              title: '無效的輸入',
              text: '請確保行數和列數在1到10的範圍內。',
              icon: 'error',
              confirmButtonText: '好的'
            });
            return false;
          }
          return true;
        }
      //未生成表格防呆
      function validateTableExists() {
        if (tableData.length === 0) {
          // 使用SweetAlert来显示更漂亮的警告框
          Swal.fire({
            title: '警告!',
            text: '請先生成表格。',
            icon: 'warning',
            confirmButtonText: '好的'
          });
          return false;
        }
        return true;
      }


        // 將學生資訊添加到單元格
        let addedStudentCount = 0;

// 函數：將學生添加到表格中的特定單元格

// 函數：將學生添加到表格中的特定單元格
function addStudentToCell(event) {
    const rowIndex = parseInt(event.target.getAttribute('data-row'), 10);
    const colIndex = parseInt(event.target.getAttribute('data-col'), 10);

    // 防呆：检查是否有学生被选中
    if (selectedStudentData.length === 0) {
        Swal.fire({
            title: '提示!',
            text: '請先選擇至少一位學生。',
            icon: 'warning',
            confirmButtonText: '確定'
        });
        return;
    }

    // 选择要加入的学生
    const randomIndex = Math.floor(Math.random() * selectedStudentData.length);
    const selectedStudent = selectedStudentData.splice(randomIndex, 1)[0];

    // 获取对应的单元格并添加学生信息
    const cell = tableData[rowIndex - 1][colIndex - 1].button.parentElement;
    cell.innerHTML = `學號: ${selectedStudent.學號}<br>姓名: ${selectedStudent.姓名}<br>（第${rowIndex}排第${colIndex}個）`;

    // 在 tableData 中更新单元格数据
    tableData[rowIndex - 1][colIndex - 1].student = selectedStudent;

    // 更新已加入学生数量
    addedStudentCount++;
    updateAddedStudentCountDisplay(addedStudentCount);

    // 更新相应的 checkbox 为 "X"
    updateCheckboxToX(selectedStudent.學號, selectedStudent.姓名);
}

// 更新 checkbox 为 "X"
function updateCheckboxToX(studentID, studentName) {
    console.log("更新 Checkbox：", studentID, studentName); // 調試信息
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    console.log("找到的 Checkbox 數量：", checkboxes.length); // 調試信息

    checkboxes.forEach(checkbox => {
    const value = checkbox.value;
    if (value.includes(studentID) && value.includes(studentName)) {
        checkbox.checked = true;
        const label = document.querySelector(`label[for="${checkbox.id}"]`); // 假設每個 checkbox 都有相對應的 label
        if (label) {
            label.textContent = "X"; // 更新標籤內容為 "X"
        }
    }
});
}



// 更新页面上显示已加入学生数量的元素
function updateAddedStudentCountDisplay(count) {
    const displayElement = document.getElementById('addedStudentCountDisplay');
    displayElement.textContent = `已加入學生數量：${count}`;
}






function validateSelectedStudents() {
  if (selectedStudents.length === 0) {
    // 使用 SweetAlert 來顯示漂亮的警告框
    Swal.fire({
      title: '提示!',
      text: '請先選擇學生。',
      icon: 'warning',
      confirmButtonText: '確定'
    });
    return false;
  }
  return true;
}

// 清除表格
function clearTable() {
    const table = document.getElementById('table');
    table.innerHTML = ''; // 清空表格內容
    tableData = []; // 清空表格數據
    addedStudentCount = 0; // 將已加入學生數量設置為 0
    updateAddedStudentCountDisplay(0); // 更新顯示已加入學生數量的元素

    // 重置學生名單中的所有復選框為未選中狀態，並且恢復原始的標籤文本
    const studentCheckboxes = document.querySelectorAll('.student-list input[type="checkbox"]');
    studentCheckboxes.forEach(checkbox => {
        checkbox.checked = false; // 重置復選框為未選中狀態
        // 重置對應的 label 文本內容
        const label = checkbox.closest('label');
        if (label && label.dataset.originalLabel) {
            // 使用存儲在 data-original-label 屬性中的原始文本內容
            label.innerHTML = label.dataset.originalLabel;
            // 重新為 label 中的 input 設置屬性
            const newCheckbox = label.querySelector('input[type="checkbox"]');
            if (newCheckbox) {
                newCheckbox.id = checkbox.id;
                newCheckbox.name = "studentList";
                newCheckbox.value = checkbox.value;
            }
        }
    });

    // 清空 selectedStudentData 陣列
    selectedStudentData = [];
}








// 全部選取
function selectAll() {
  const checkboxes = document.querySelectorAll('input[name="studentList"]');
  checkboxes.forEach(checkbox => {
    checkbox.checked = true;
    const value = checkbox.value.split(' ');
    const 學號 = value[0];
    const 姓名 = value[1];
    selectedStudentData.push({ 學號, 姓名 });
  });
}

// 取消選取
function deselectAll() {
  const checkboxes = document.querySelectorAll('input[name="studentList"]');
  checkboxes.forEach(checkbox => {
    checkbox.checked = false;
    const value = checkbox.value.split(' ');
    const 學號 = value[0];
    const indexToRemove = selectedStudentData.findIndex(selected => selected.學號 === 學號);
    if (indexToRemove !== -1) {
      selectedStudentData.splice(indexToRemove, 1);
    }
  });
}

// 重新渲染「加入學生」按鈕
function renderAddStudentButtons() {
  const table = document.getElementById('table');
  for (let i = 0; i < table.rows.length; i++) {
    const row = table.rows[i];
    for (let j = 0; j < row.cells.length; j++) {
      const cell = row.cells[j];
      // 获取cell中所有button
      const buttons = cell.querySelectorAll("button");
      // 检查是否有文本内容为'加入學生'的button
      let hasAddStudentButton = Array.from(buttons).some(button => button.textContent === '加入學生');
      // 如果没有，则创建并添加这样的button
      if (!hasAddStudentButton) {
        const addButton = document.createElement('button');
        addButton.textContent = '加入學生';
        addButton.className = 'add-student-button'; // 添加类名
        addButton.setAttribute('data-row', i + 1);
        addButton.setAttribute('data-col', j + 1);
        addButton.addEventListener('click', addStudentToCell);
        cell.appendChild(addButton);
      }
    }
  }
}

// 新增排
function addRow() {
  const table = document.getElementById('table');
  const newRow = table.insertRow(-1);
  const columns = parseInt(document.getElementById('columns').value, 10);
  const rowData = [];

  for (let j = 0; j < columns; j++) {
      const cell = newRow.insertCell(j);
      const rowIndex = table.rows.length;
      const columnIndex = j + 1;

      const addButton = createAddButton(rowIndex, columnIndex);
      cell.appendChild(addButton);

      rowData.push({ 第幾排: rowIndex, 第幾個: columnIndex, button: addButton });
  }

  tableData.push(rowData);
  renderAddStudentButtons();
}

// 創建加入學生按鈕
function createAddButton(rowIndex, columnIndex) {
  const addButton = document.createElement('button');
  addButton.textContent = '加入學生';
  addButton.className = 'add-student-button'; // 应用 CSS 类
  addButton.setAttribute('data-row', rowIndex);
  addButton.setAttribute('data-col', columnIndex);
  addButton.addEventListener('click', addStudentToCell);
  return addButton;
}



// 新增列
function addColumn() {
  const table = document.getElementById('table');
  const rows = table.rows;

  if (!validateTableExists()) return;

  Array.from(rows).forEach((row, i) => {
      const cell = row.insertCell(-1);
      const rowIndex = i + 1;
      const columnIndex = row.cells.length;

      const addButton = createAddButton(rowIndex, columnIndex);
      cell.appendChild(addButton);
  });
}

// 減少排
function removeRow() {
  const table = document.getElementById('table');

  if (!validateTableExists()) return;

  if (table.rows.length > 0) {
      table.deleteRow(-1);
      tableData.pop();
      renderAddStudentButtons();
  }
}

// 減少列
function removeColumn() {
  const table = document.getElementById('table');
  const rows = table.rows;

  if (!validateTableExists()) return;

  if (rows.length > 0 && rows[0].cells.length > 0) {
      Array.from(rows).forEach(row => row.deleteCell(-1));
      renderAddStudentButtons();
  }
}

                      // 儲存表格數據到數據庫
                      function saveTableData() {
                      // 检查表格是否存在
                      if (!validateTableExists()) return;

                      // 检查表格是否至少有一个学生
                      let hasStudent = false;
                      for (let rowData of tableData) {
                        if (rowData.some(cell => cell.student && cell.student.學號)) {
                          hasStudent = true;
                          break;
                        }
                      }

                      if (!hasStudent) {
                        Swal.fire({
                          title: '錯誤!',
                          text: '表格中沒有學生資訊。請添加學生。',
                          icon: 'error',
                          confirmButtonText: '確定'
                        });
                        return;
                      }

                        // 发送请求保存数据
                        var dataToSend = tableData.flat().map(function(cell) {
                          return {
                            學號: cell.student ? cell.student.學號 : '',
                            姓名: cell.student ? cell.student.姓名 : '',
                            第幾排: cell.第幾排,
                            第幾個: cell.第幾個
                          };
                        });

                        // 使用 AJAX 發送數據
                        $.ajax({
                        url: '座位資料表1.php', // 替換成您的 PHP 文件路徑
                        type: 'POST',
                        contentType: 'application/json',
                        dataType: 'json',
                        data: JSON.stringify({tableData: dataToSend}),
                        success: function(response) {
                          // 數據保存成功，顯示成功的彈出視窗
                          Swal.fire({
                            title: '成功!',
                            text: '座位資料已成功儲存。',
                            icon: 'success',
                            confirmButtonText: '確定'
                          });
                        },
                        error: function(xhr, status, error) {
                          // 保存數據出錯，顯示錯誤的彈出視窗
                          Swal.fire({
                            title: '錯誤!',
                            text: '無法儲存座位資料。',
                            icon: 'error',
                            confirmButtonText: '確定'
                          });
                        }
                      });
                    }



// 頁面加載時獲取學生名單
getData();

function validateTableExists() {
  const table = document.getElementById('table');
  if (table.rows.length === 0) {
    // 使用 SweetAlert 显示警告
    Swal.fire({
      title: '警告!',
      text: '請先生成表格。',
      icon: 'warning',
      confirmButtonText: '好的'
    });
    return false;
  }
  return true;
}


                  </script>


                  <!--End Dashboard Content-->

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