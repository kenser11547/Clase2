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
            $this -> nombre = $nombre;
            $this -> precio = $precio;
            $this -> disponible = $disponible;


        }
    }
