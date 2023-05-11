<?php
class lingkaran {
private $jari;
const PHI = 3.14;
function _construct($r){
    $this->jari = $r;
}
function getluas(){
    return self::PHI * $this->jari * $this->jari;
}
function getKeliling(){
    return 2 * self::PHI * $this->jari;
}
}


?>