function applySeatConfig() {
    var config = document.getElementById("seatConfig").value;

    // 清空現有座位表
    var table = document.getElementById("seatTable");
    table.innerHTML = '';

    // 根據選擇的配置添加座位
    switch(config) {
        case "default":
            // 添加默認配置的座位
            break;
        case "theater":
            // 添加劇院式配置的座位
            break;
        case "classroom":
            // 添加教室式配置的座位
            break;
        case "uShape":
            // 添加U型配置的座位
            break;
        // 添加更多配置的處理
    }
}
