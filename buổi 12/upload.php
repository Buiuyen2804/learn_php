<?php
require_once 'ImageUpload.php';

$targetDir = "images"; // Thư mục lưu trữ hình ảnh đã tải lên
$imageUpload = new imageUpload($targetDir);


// Hiển thị các hình ảnh đã tải lên
$uploadedFiles = array_diff(scandir($targetDir), array('..', '.'));
if (!empty($uploadedFiles)) {
    echo "<h2>Hình ảnh :</h2>";
    echo "<div id='uploaded-image'>";
    foreach ($uploadedFiles as $file) {
        echo "<img src='$targetDir/$file' alt='Hình ảnh'>";
    }
    echo "</div>";
}
?>
