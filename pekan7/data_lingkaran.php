<?php
require_once "class_lingkaran.php";
echo "Nilai PHI ".lingkaran::PHI;

$lingkar1 = new lingkaran( 10 );
$lingkar2 = new lingkaran( 4 );

echo "<br/>Luas Lingkaran I ".$lingkar1->getLuas();
echo "<br/>Luas Lingkaran II ".$lingkar2->getLuas();
echo "<br/>Keliling Lingkaran I ".$lingkar1->getKeliling();
echo "<br/>Keliling Lingkaran I ".$lingkar2->getKeliling();



?>
