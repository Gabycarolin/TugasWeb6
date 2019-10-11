<?php // Awalan dari sebuah script PHP 

//Penulisan variabel harus diawali dengan tanda $
$nama = "Gaby"; //deklarasi variabel nama yang nilainya berisi String "Gaby"
$umur = "18"; //deklarasi variabel umur yang nilainya berisi integer "18"
$a="Saya Sedang belajar PHP"; //deklarasi variabel a yang nilainya berisi String "Saya Sedang belajar PHP"
$b= "5"; //deklarasi variabel b yang nilainya berisi integer "5"

//output nilai pada halaman web
echo $nama; //hasil "Nama = Gaby"
echo "<br \>"; //enter
echo $umur; //hasil "Umur = 18"
echo "<br \>"; //enter

//hasil "Saya Sedang belajar PHP5"
print $a; 
echo $b;
//fungsi print dan echo sama, yaitu output nilai

echo "<br \>"; //enter

//Variabel dalam PHP bersifat case sensitif
$andi="Andi";
echo $Andi; // Notice: Undefined variable: Andi 
//(tidak dapat output nilai $andi karena penulisan pada echo $Andi / bersifat sensitif)


?> <!--Akhiran dari sebuah script PHP-->