<?php
    class Transporte {
        protected $ruedas;
        public $capacidad;
        public static $colorv= "verde";

        public function __construct($ruedas, $capacidad)
        {
            $this->ruedas = $ruedas;
            $this->capacidad = $capacidad;
        }
        public static function getColor (){
            echo "el transporte es de color" . self::$color;
        }
        public function getInfo() : void{
            echo "El transporte tiene " . $this->ruedas . "ruedas y una capacidad de " . $this->capacidad . " personas ";
        }

        public function getRuedas() : void {
            echo "El transporte tiene $this->ruedas ruedas";
        }
    }
    class carro extends Transporte {
        public $puertas;

        public function __construct($puertas = 0, $ruedas = 0, $capacidad = 0){
            $this->puertas = $puertas;
            parent:: __construct($ruedas, $capacidad);
        }

        public function getInfo() : void{
            echo "El carro tiene $this->ruedas ruedas, capacidad de : $this->capacidad y $this->puertas puertas";
        }
    }
    class bicicleta extends Transporte {
        public function getInfo() : void{
            echo "la bicicleta tiene $this->ruedas ruedas, capacidad de : $this->capacidad personas";
        }
    }
    $carroToyota = new Carro (4,5);
    $carroToyota->puertas = 2;
    $carroToyota->getInfo();
    echo "<br>";
    $bicicletasTour = new bicicleta(2,1);
    $bicicletasTour->getInfo();
