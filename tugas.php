<?php
function luas_lingkaran($r) {
  $luas = 3.14 * pow($r, 2);
  return round($luas, 2);
}

function keliling_lingkaran($r) {
  $keliling = 2 * 3.14 * $r;
  return round($keliling, 2);
}

function luas_persegi($p, $l) {
  $luas = $p * $l;
  return round($luas, 2);
}

for ($i = 1; $i <= 100; $i++) {
  if ($i % 3 == 0 && $i % 5 == 0) {
    $panjang = $i / 3;
    $lebar = $i / 5;
    echo luas_persegi($panjang, $lebar) . "<br>";
  } elseif ($i % 3 == 0) {
    $r = $i / 3;
    echo luas_lingkaran($r) . "<br>";
  } elseif ($i % 5 == 0) {
    $r = $i / 5;
    echo keliling_lingkaran($r) . "<br>";
  } else {
    echo number_format($i, 2) . "<br>";
  }
  echo "\n";
}
?>
