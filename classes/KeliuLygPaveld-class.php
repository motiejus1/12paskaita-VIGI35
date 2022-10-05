<?php 
//keliu lygiu paveldimumas

class Kompiuteris {
    public $spalva="Juoda";
    public $rusis="Nesiojamas";// stacionarus, nešiojamas, plansetinis
    public $ekranoDydis = "15.6";
    public $ekranoTipas = "IPS";
    public $ekranoSpalva = "Matinis";// matinis ir blizgus
    public $ekranoRezoliucija = "4k";
}

//kompiuteris - vaizdo plokste, procesorius, hdd, ssd, ram ....

//

class Procesorius extends Kompiuteris {
    // public $spalva="Juoda";
    // public $rusis="Nesiojamas";// stacionarus, nešiojamas, plansetinis
    // public $ekranoDydis = "15.6";
    // public $ekranoTipas = "IPS";
    // public $ekranoSpalva = "Matinis";// matinis ir blizgus
    // public $ekranoRezoliucija = "4k";
    public $gamintojas = "Intel";
    public $modelis = "i7";
    public $taktinisDaznis = "3.5";
} 

//Branduoliu
class Branduolys extends Procesoriaus {
    // public $spalva="Juoda";
    // public $rusis="Nesiojamas";// stacionarus, nešiojamas, plansetinis
    // public $ekranoDydis = "15.6";
    // public $ekranoTipas = "IPS";
    // public $ekranoSpalva = "Matinis";// matinis ir blizgus
    // public $ekranoRezoliucija = "4k";
    // public $gamintojas = "Intel";
    // public $modelis = "i7";
    // public $taktinisDaznis = "3.5";
    public $transistoriuSkaicius = "1000000000";
    public $pagaminimoTechnologija = "14nm";
}


$procesorius = new Procesorius();

echo $procesorius->spalva;
echo "<br>";
echo $procesorius->rusis;
echo "<br>";
echo $procesorius->ekranoDydis;
echo "<br>";
echo $procesorius->ekranoTipas;
echo "<br>";
echo $procesorius->ekranoSpalva;
echo "<br>";
echo $procesorius->ekranoRezoliucija;
echo "<br>";
echo $procesorius->gamintojas;
echo "<br>";
echo $procesorius->modelis;
echo "<br>";
echo $procesorius->taktinisDaznis;

$branduolys = new Branduolys();

echo $branduolys->transistoriuSkaicius;
echo "<br>";
echo $branduolys->pagaminimoTechnologija;
echo "<br>";
echo $branduolys->gamintojas;
echo "<br>";
echo $branduolys->modelis;
echo "<br>";
echo $branduolys->taktinisDaznis;
