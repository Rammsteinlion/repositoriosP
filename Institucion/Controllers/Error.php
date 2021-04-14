<?php

Class Errors extends Controllers{

    public function __construct()
    {
        /**
         * ejecutando el metodo constructor de 
         * la clase que esta heredando
         */
        parent::__construct(); 
    }

    public function notFound(){
        $this->views->getView($this,"error");
    }

}

$notFound = new Errors();
$notFound-> notFound();