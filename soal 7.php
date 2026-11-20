<?php
function luas($r) {
    return 3.14 * $r * $r;
}

function keliling($r) {
    return 2 * 3.14 * $r;
}

foreach ([7, 14] as $r) {
    echo "Jari-jari: $r <br>";
    echo "Luas: " . luas($r) . "<br>";
    echo "Keliling: " . keliling($r) . "<br><br>";
}
?>