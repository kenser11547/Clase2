<?php
    class Transporte {
        public $ruedas;
        public $capacidad;
        public function __construct($ruedas, $capacidad)
        {
            $this->ruedas = $ruedas;
            $this->capacidad = $capacidad;
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



/*
    class Bicicleta extends Transporte {
        public function getInfo() : string{
            return "el transporte tiene " . $this->ruedas . "ruedas y una capacidad de" . $this->capacidad . "personas y no gasta gasolina";
        }
    }
    class Automovil extends Transporte {
        protected string $transmision;
        public function __construct(int $ruedas, int $capacidad, string $transmision)
        {
            $this->ruedas = $ruedas;
            $this->capacidad = $capacidad;
            $this->transmision = $transmision;
        }
        public function getTransmision() : string {
            return $this->transmision;
        }
    }
    //instancia del primer objeto
    $bicicleta = new Bicicleta(2,1);
    //ejecucion del metodo heredado de transporte
    echo $bicicleta->getInfo();
    echo $bicicleta->getRuedas();

    echo "<hr>";
    //instancia del segundo objeto
    $auto = new Automovil(4,4,'manual');
    //metodo heredado de transporte
    echo $auto->getInfo();
    //metodo  de clase automovil
    echo $auto->getTransmision();*/
    