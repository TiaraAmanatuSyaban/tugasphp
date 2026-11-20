<?php
$nama_barang = "Buku";
$harga = 120000;
$jumlah = 1;

$total = $harga * $jumlah;

if ($total > 100000) {
    $diskon = $total * 10 / 100;
} else {
    $diskon = 0;
}

$bayar = $total - $diskon;

echo "<h2>STRUK PEMBELIAN</h2>";
echo "Nama Barang: $nama_barang <br>";
echo "Harga: Rp" . number_format($harga, 0, ',', '.') . "<br>";
echo "Jumlah: $jumlah <br>";
echo "Total: Rp" . number_format($total, 0, ',', '.') . "<br>";
echo "Diskon: Rp" . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total Bayar: Rp" . number_format($bayar, 0, ',', '.');
?>