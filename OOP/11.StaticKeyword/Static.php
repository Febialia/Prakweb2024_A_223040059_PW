<?php
/* class ContohStatic 
{
     public static $angka = 1;

     public static function halo() {
         return "Halo " . self::$angka++ . " kali.";     
        }
}

 echo ContohStatic::$angka;
 echo "<br>";
 echo ContohStatic::halo();
 echo "<hr>";
 echo ContohStatic::halo();
 
*/

class Contoh
{
    public static $angka = 1;

    public static function helo()
    {
        return "hello " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->helo();
echo $obj->helo();
echo $obj->helo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->helo();
echo $obj2->helo();
echo $obj2->helo();
