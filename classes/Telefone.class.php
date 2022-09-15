<?php

class Telefone{

    private $codArea;
    private $numero;

    function __construct($codArea, $numero){
        $this->codArea = $codArea;
        $this->numero = $numero;
    } 

    function getCodArea(){
        return $this->codArea;
    }

    function getNumero(){
        return $this->numero;
    }

    function setCodArea($codArea){
        $this->codArea = $codArea;
    }

    function setnumero($numero){
        $this->numero = $numero;
    }

    function __toString(){
        return "($this->codArea) $this->numero";
    }
}

/*Teste da Classe Criada
$tell = new Telefone('32','22222-2222');
echo $tell.'<br/>';
$tell->setCodArea('21');
$tell->setNumero('33333-3333');
echo $tell.'<br/>';*/