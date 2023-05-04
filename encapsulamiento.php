<?php
    class Producto{
        #definicion de atributos
        public string $nombre;
        public int $precio;
        public bool $disponible;
        #metodo contructor, se ejecuta al efectuar la intancia
        public function __construct(string $nombre, int $precio, bool $disponible)
        {
            
        }

    }