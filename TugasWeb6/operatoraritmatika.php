<?php // Awalan dari sebuah script PHP 

$hasil1= -3; //deklarasi variabel hasil1 
$hasil2= 3+5; //deklarasi variabel hasil2
$hasil3= 8-4.5; //deklarasi variabel hasil3
$hasil4= 2*5; //deklarasi variabel hasil4
$hasil5= 3+8/5-3; //deklarasi variabel hasil5
$hasil6= 10 % 4; //deklarasi variabel hasil6

/*
fungsi var_dump() untuk menampilkan hasil perhitungan dari deklarasi diatas,
dan kita bisa melihat tipe data dari masing-masing variabel.
*/
echo "\$hasil1 : "; var_dump($hasil1); // $hasil1:int(-3) 
echo "<br \>"; //enter
echo "\$hasil2 : "; var_dump($hasil2); // $hasil2:int(8)
echo "<br \>"; //enter
echo "\$hasil3 : "; var_dump($hasil3); // $hasil3:float(3.5)
echo "<br \>"; //enter
echo "\$hasil4 : "; var_dump($hasil4); // $hasil4:int(10)
echo "<br \>"; //enter
echo "\$hasil5 : "; var_dump($hasil5); // $hasil5:float(1.6)
echo "<br \>"; //enter
echo "\$hasil6 : "; var_dump($hasil6); // $hasil6:int(2)

?> <!--Akhiran dari sebuah script PHP-->