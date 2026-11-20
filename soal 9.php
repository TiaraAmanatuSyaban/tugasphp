<!DOCTYPE html>
<html>
<body>

<h2>Kalkulator PHP</h2>

<form method="POST">
    Angka pertama:
    <input type="number" name="a" required><br><br>

    Angka kedua:
    <input type="number" name="b" required><br><br>

    Operator:
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>

    <button type="submit">Hitung</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = (float) $_POST["a"];
    $b = (float) $_POST["b"];
    $op = $_POST["operator"];

    switch ($op) {
        case "+":
            $hasil = $a + $b;
            break;
        case "-":
            $hasil = $a - $b;
            break;
        case "*":
            $hasil = $a * $b;
            break;
        case "/":
            if ($b == 0) {
                $hasil = "Tidak bisa dibagi nol";
            } else {
                $hasil = $a / $b;
            }
            break;
        default:
            $hasil = "Operator tidak valid";
    }

    echo "Hasil: $hasil";
}
?>

</body>
</html>