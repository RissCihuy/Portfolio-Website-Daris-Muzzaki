<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <link rel="stylesheet" href="styles.css">
</head>

<?php
if(isset($_POST['hitung'])){
    if($_POST['operasi']=="tambah"){
        $hasil = $_POST['angka1'] + $_POST['angka2'];
    } elseif($_POST['operasi']=="kurang"){
        $hasil = $_POST['angka1'] - $_POST['angka2'];
    }elseif($_POST['operasi']=="kali"){
        $hasil = $_POST['angka1'] * $_POST['angka2'];
    } else{
        $hasil = $_POST['angka1'] / $_POST['angka2'];
    }
} else{
    $hasil = 0;
}
?>


<body>
    <div class="isi">
    <h1 class="judul">My Calculator</h1>
    <form action="index.php" method="POST">
        <input type="text" name="angka1" class="input">
        <input type="text" name="angka2" class="input">
        <select name="operasi" class="operasi">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> * </option>
            <option value="bagi"> / </option>
        </select>
        <input type="submit" name="hitung" value="Hitung" class="hitung">

        <h2>Hasil : <?php echo $hasil; ?></h2>

    </form>
    </div>
</body>
</html>