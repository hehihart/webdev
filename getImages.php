<?php
$directory = 'images/';
$images = array();

// Supported image extensions
$extensions = array('jpg');

// Scan the directory for files
foreach (scandir($directory) as $file) {
    $file_path = $directory . $file;
    $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
    if (in_array(strtolower($file_ext), $extensions)) {
        $images[] = $file_path;
    }
}

// Return the list of images as JSON
header('Content-Type: application/json');
echo json_encode($images);
?>
