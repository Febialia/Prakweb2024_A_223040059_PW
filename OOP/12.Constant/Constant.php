<?php
//define tidak bisa disimpan di dalam kelas
//define('nama', 'Febi Alia'); 
//echo nama;

//echo "<br>";

// const bisa disimpan di dalam kelas
//const umur = 20;
//echo umur;

//class Coba{
// const Nama = 'Febi Alia';
//}

//echo Coba::Nama;

// Magic Conctant
// echo __LINE__
// echo __file__
// echo __DIR__
// echo __FUNCTION__
// echo __CLASS__
// echo __TRAIT__
// echo __METHOD__
// echo __NAMESPACE__

// function coba() {
//     return __FUNCTION__;
// }

// echo coba();

class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
