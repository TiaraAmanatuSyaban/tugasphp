
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran</title>
</head>
<body>

    <h2>Form Pendaftaran</h2>

    <form method="POST">
        Nama:
        <input type="text" name="nama">
        <br><br>

        Umur:
        <input type="number" name="umur">
        <br><br>

        Email:
        <input type="email" name="email">
        <br><br>

        <button type="submit" name="daftar">Daftar</button>
    </form>

    <?php
    if (isset($_POST['daftar'])) {

        $nama = trim($_POST['nama'] ?? '');
        $umur = trim($_POST['umur'] ?? '');
        $email = trim($_POST['email'] ?? '');

        if (empty($nama) || empty($umur) || empty($email)) {
            echo "Semua kolom harus diisi!";
        } elseif (!is_numeric($umur) || $umur <= 0) {
            echo "Umur harus berupa angka lebih dari 0!";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Format email tidak valid!";
        } else {
            echo "<h3>Pendaftaran Berhasil!</h3>";
            echo "Nama: " . htmlspecialchars($nama) . "<br>";
            echo "Umur: " . htmlspecialchars($umur) . " tahun<br>";
            echo "Email: " . htmlspecialchars($email);
        }
    }
    ?>

</body>
</html>
