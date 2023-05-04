<?php
    class Producto{
        #definicion de atributos
        public string $nombre;
        public int $precio;
        public bool $disponible;

        #metodo constructor, se ejecuta al efectuar la instancia
        public function _construct(string $nombre, int $precio, bool $disponible)
        {
            #se les da valor a los atributos con los parametros que recibe el metodo consturctor
            $this->nombre = $nombre;
            $this->precio = $precio;
            $this->disponible = $disponible;
        }

        #definicion de metodos
        public function mostrarProducto (){
            echo "el producto es: " . $this->nombre . "y su precio es de: ". $this->precio;
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


