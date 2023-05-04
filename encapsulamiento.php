<?php
    class Producto{
        #definicion de atributos
        public string $nombre;
        public int $precio;
        public bool $disponible;
        #metodo contructor, se ejecuta al efectuar la intancia
        public function __construct(string $nombre, int $precio, bool $disponible)
        {
             #se les da valor a los atributos con los parametros que recibe el metodo consturctor
             $this->nombre = $nombre;
             $this->precio = $precio;
             $this->disponible = $disponible;           
        }

    }