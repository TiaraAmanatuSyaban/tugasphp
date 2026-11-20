
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konversi Suhu</title>
</head>
<body>

    <h2>Program Konversi Suhu</h2>

    <form method="POST">
        Masukkan Suhu Celsius:
        <input type="number" name="celsius" step="any" required>
        <button type="submit" name="hitung">Hitung</button>
    </form>

    <?php
    if (isset($_POST['hitung'])) {

        $c = $_POST['celsius'];

        // Rumus konversi suhu
        $r = (4/5) * $c;
        $f = (9/5) * $c + 32;
        $k = $c + 273;

        echo "<h3>Hasil Konversi Suhu</h3>";
        echo "Celsius: $c &deg;C <br>";
        echo "Reamur: $r &deg;R <br>";
        echo "Fahrenheit: $f &deg;F <br>";
        echo "Kelvin: $k K <br>";
    }
    ?>

</body>
</html>
