<?php

//define('NAMA','Winaa');
//echo NAMA;

//echo "<br>";

//const UMUR = 17;
//echo UMUR;

//class Coba {
//  const NAMA = 'Winaa';
//}

//echo Coba::NAMA;

//echo __LINE__;




//function coba() {
// return __FUNCTION__;
//}

//echo coba();

class coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;





 ?>