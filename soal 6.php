<?php
$nilai = [
    "Apip" => 85,
    "Haikal" => 70,
    "Keyra" => 80,
    "Dina" => 95,
    "annisa" => 90
];

$total = array_sum($nilai);
$rata = $total / count($nilai);

echo "<table border='1' cellpadding='8'>";
echo "<tr><th>Nama</th><th>Nilai</th></tr>";

foreach ($nilai as $nama => $angka) {
    echo "<tr><td>$nama</td><td>$angka</td></tr>";
}

echo "</table>";

echo "Rata-rata: $rata <br>";
echo "Nilai tertinggi: " . max($nilai) . "<br>";
echo "Nilai terendah: " . min($nilai);
?>