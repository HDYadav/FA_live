<?php 
$time = intval($_POST['time']);
if (!file_exists('data.txt')) {
    file_put_contents('data.txt', $time . "\n");
} else {
    file_put_contents('data.txt', $time . "\n", FILE_APPEND);
}
?>