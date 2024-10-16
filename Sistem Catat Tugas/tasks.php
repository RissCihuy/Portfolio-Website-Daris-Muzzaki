<?php
// Memuat daftar tugas dari file JSON
if (file_exists('tasks.json')) {
    $tasks = json_decode(file_get_contents('tasks.json'), true);
} else {
    $tasks = [];
}
?>