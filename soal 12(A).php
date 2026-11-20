<?php
$pesan = "";
if (isset($_POST['daftar'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    if ($password == $konfirmasi) {
        $pesan = "Registrasi Berhasil!<br>
                  Nama : $nama <br>
                  Username/Email : $username";
    } else {
        $pesan = "Password dan Konfirmasi Password tidak sama!";
    }
}
?>

<h2>Form REGISTRASI</h2>
<form method="POST">
    Nama : <br>
    <input type="text" name="nama" required><br><br>

    Username / Email : <br>
    <input type="text" name="username" required><br><br>

    Password : <br>
    <input type="password" name="password" required><br><br>

    Konfirmasi Password : <br>
    <input type="password" name="konfirmasi" required><br><br>

    <input type="submit" name="daftar" value="DAFTAR">
    <input type="reset" value="BATAL">
</form>

<br>
<?php echo $pesan; ?>