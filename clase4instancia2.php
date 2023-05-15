<?php
    class Producto{
        #definicion de atributos
        
        public $precio;
        public $nombre;
        private $disponible;

        #metodo constructor, se ejecuta al efectuar la instancia
        public function __construct(int $precio = 0, string $nombre = "SIN NOMBRE", bool $disponible = false)
        {
            #se les da valor a los atributos con los parametros que recibe el metodo consturctor
            $this->precio = $precio;
            $this->nombre = $nombre;
            $this->disponible = $disponible;
        }

        #definicion de metodos
        public function mostrarNombreProducto() : void{
            echo $this->nombre;
        }
        public function mostrarPrecioProducto() : void{
            echo $this->precio;
        }
        #definicion de metodos
        public function getDisponibilidad() : bool {
            return $this->disponible ? 'si esta disponible' : 'no esta disponible';
        }
        public function getDisponibilidad(bool $disponible): void {
            $this->disponible = $disponible;
        }
    }
    //instancia de la clase en el primer objeto
    $producto = new Producto('Tablet', 200, true);
    //llamado al metodo mostrar producto, utlizando sintaxis de flecha ->
    $producto ->mostrarProducto();

    //impresion en pantalla del primer objeto
    echo "<pre>";
    var_dump($producto);
    echo "</pre>";
    
    //intancia de la clase del segundo objeto
    $producto2 = new Producto('Monitor curvo', 300, true);
    //llamado al metodo mostrar producto, usando sintaxis de flecha ->
    $producto2->mostrarProducto();

    //impresion del segundo producto
    echo "<pre>";
    var_dump($producto2);
    echo "</pre>";

?>