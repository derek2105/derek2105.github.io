<?php
$file = $_GET['file'];

if (file_exists("uploads/" . $file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize("uploads/" . $file));
    flush(); // Flush system output buffer
    readfile("uploads/" . $file);
    exit;
}
?>
