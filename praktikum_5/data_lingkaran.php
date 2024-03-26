<?php

require_once 'class_lingkaran.php';

echo "Nilai PHI : ". lingkaran::PHI;

$lingkaran1 = new lingkaran(10);
$lingkaran2 = new lingkaran(7);

echo "<br>Luas object lingkaran 2" . $lingkaran2->getluas();
echo "<br>Luas object lingkaran 1" . $lingkaran1->getluas();

echo "<br>keliling object lingkaran 2" . $lingkaran2->getkeliling();
echo "<br>keliling object lingkaran 1" . $lingkaran1->getkeliling();
