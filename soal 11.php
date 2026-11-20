<?php
$hasil = "";
if (isset($_POST['hitung'])) {
    $r = $_POST['jari'];
    $pi = 3.14;
    $luas = $pi * $r * $r;

    $hasil = "Jari-jari : $r <br>
              Luas : $luas";
}
?>

<h2>Menghitung Lingkaran</h2>
<form method="POST">
    Masukkan Jari-jari : <br>
    <input type="number" name="jari" required><br><br>
    <input type="submit" name="hitung" value="HITUNG">
</form>

<br>
<?php echo $hasil; ?>