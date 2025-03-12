<?php
$filename = "counter.txt";

// 如果文件不存在，则创建并初始化
if (!file_exists($filename)) {
    file_put_contents($filename, "0");
}

// 读取当前访问次数
$count = (int) file_get_contents($filename);
$count++;

// 更新访问次数
file_put_contents($filename, $count);

// 输出 JSON 以供 JavaScript 读取
echo json_encode(["count" => $count]);
?>
