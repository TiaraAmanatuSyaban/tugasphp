<?php
$pesan = "";
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username != "" && $password != "") {
        $pesan = "Login Berhasil! Selamat datang, $username";
    } else {
        $pesan = "Login Gagal! Isi dulu username & passwordnya.";
    }
}
?>

<h2>Form LOGIN</h2>
<form method="POST">
    Username / Email : <br>
    <input type="text" name="username" required><br><br>

    Password : <br>
    <input type="password" name="password" required><br><br>

    <input type="submit" name="login" value="LOGIN">
    <input type="reset" value="BATAL">
</form>

<br>
<?php echo $pesan; ?>