<?php

// ファイルの読み込み
require_once('Models/Task.php');

// タイムゾーン設定
date_default_timezone_set('Asia/Tokyo');

// // データの受け取り
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");

// // DBへのデータ保存
$task = new Task();
$task->create([$title, $contents, $currentTime]);

// // リダイレクト
header('location:index.php');
exit;
