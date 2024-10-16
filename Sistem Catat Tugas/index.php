<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>
    
    <form action="" method="POST">
        <input type="text" name="task" placeholder="Tulis tugas baru..." required>
        <button type="submit">Tambah Tugas</button>
    </form>
    
    <ul>
        <?php
        include 'tasks.php'; // Memasukkan file tasks.php

        // Menambahkan tugas baru jika form disubmit
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['task'])) {
            $task = htmlspecialchars($_POST['task']);
            $tasks[] = ['task' => $task];
            file_put_contents('tasks.json', json_encode($tasks));
        }

        // Menampilkan daftar tugas
        foreach ($tasks as $task) {
            echo "<li>{$task['task']}</li>";
        }
        ?>
    </ul>
</body>
</html>