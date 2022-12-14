<?php 

//Objektu savybiu - paveldimumas

//Paveldimumas = tam tikru bruozu perdavimas kitoms kartoms

//Objekto paveldimumas = savybiu(properties) ir metodai(methods) perdavimas kitoms klasems/objektams

//4 teorinius pavyzdzius

//2 praktiniai pavyzdziai


//gyvunas - kate, suo, dramblys, zuvis ir t.t.
//spalva
//svori
//koju skaiciu

class Gyvunas {
    public $spalva="Geltona";
    public $svoris = "1t";
    public $kojuSkaicius = "4";


    public function __construct($spalva, $svoris, $kojuSkaicius) {
        $this->spalva = $spalva;
        $this->svoris = $svoris;
        $this->kojuSkaicius = $kojuSkaicius;
    }

    public function miegoti() {
        echo "miegu miegu";
    }

    public function apibudinkSave() {
        echo $this->spalva." ".$this->svoris." ".$this->kojuSkaicius ;
    }
}

class Kate extends Gyvunas{
    

    //ar paveldetas konstruktorius
    // KONSTRUKTORIUS YRA PAVELDIMAS

    //kontsruktoriaus perasymas
    //konstruktoriu mes galime perasyti ir pakeisti jo parametrus


    //kate bus juoda

    //savybiu ir metodu perasymas

    public $spalva="Juoda";
    public $svoris = "12kg";
    public $kailioPurumas;
    //perasyti $kojuSkaicius nereikia!!!

    public function __construct($spalva,$svoris, $kojuSkaicius, $kailioPurumas) {
        //(Gyvunas)
        //iskvieciame tevini konstruktoriu
        parent::__construct($spalva, $svoris,$kojuSkaicius);
        $this->kailioPurumas = $kailioPurumas;
        return false;
    }

    public function koksKailis() {
        echo $this->kailioPurumas;
    }

    public function begti() {
        echo "begu greitai";
    }

    public function miegoti() {
        echo "miegu miegu";
    }
    
}

class Suo extends Gyvunas{
    public $spalva="Rudas";
    public $svoris = "15kg";
    //perasyti $kojuSkaicius nereikia!!!

    public function begti() {
        echo "begu dar greiciau";
    }

    public function miegoti() {
        echo "miegu miegu";
    }

    public function loti() {
        echo "loju";
    }
}

class Dramblys extends Gyvunas{
    public $spalva="Pilkas";
    //perasyti $kojuSkaicius nereikia!!!

    public function begti() {
        echo "bega letai";
    }

    public function miegoti() {
        echo "miegu miegu";
    }

}

class Zuvis extends Gyvunas{
    public $svoris = "1kg";
    public $kojuSkaicius = "0";
    //perasyti $kojuSkaicius nereikia!!!

    public function miegoti() {
        echo "miegu miegu";
    }

    //zuvis moka ir begti

    //public function begti() ...

    public function begti() {
        return false;
    }

}

// $gyvunas = new Gyvunas(); //geltonas 1t 4 kojas
// $gyvunas1 = new Gyvunas(); //gektinas 1t 4 kojos

// $kate = new Kate();
// echo $kate->spalva;
// echo "<br>";
// echo $kate->svoris;
// echo "<br>";
// echo $kate->kojuSkaicius;
// echo "<br>";
// $kate->begti();
// echo "<br>";
// $kate->miegoti();

// echo "<br>";
// $suo = new Suo();
// echo $suo->spalva;
// echo "<br>";
// echo $suo->svoris;
// echo "<br>";
// echo $suo->kojuSkaicius;
// echo "<br>";
// $suo->begti();