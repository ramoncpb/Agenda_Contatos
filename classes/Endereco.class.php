<?php
class Endereco{

    private $cep;
    private $rua;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $pais;

    function __construct($cep, $rua, $numero, $bairro, $cidade, $estado, $pais){
        $this->cep = $cep;
        $this->rua = $rua;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->pais = $pais;
    }

    function getCep(){
        return $this->cep;
    }

    function getRua(){
        return $this->rua;
    }

    function getNumero(){
        return $this->numero;
    }

    function getBairro(){
        return $this->bairro;
    }

    function getCidade(){
        return $this->cidade;
    }

    function getEstado(){
        return $this->estado;
    }

    function getPais(){
        return $this->pais;
    }

    function setCep($cep){
        $this->cep = $cep;
    }

    function setRua($rua){
        $this->rua = $rua;
    }

    function setNumero($numero){
        $this->numero = $numero;
    }

    function setBairro($bairro){
        $this->bairro = $bairro;
    }

    function setCidade($cidade){
        $this->cidade = $cidade;
    }

    function setEstado($estado){
        $this->estado = $estado;
    }

    function setPais($pais){
        $this->pais = $pais;
    }


    function __toString(){
        return "$this->rua, $this->numero - $this->cidade / $this->estado";
    }
}

//Teste da Classe Endereco
$end1 = new Endereco('36000-000', 'Rua Afonso Pena', 240, 'Centro', 'Juiz de Fora', 'MG', 'Brasil');
echo $end1.'<br/>';

$end1->setNumero(500);
$end1->setRua('Rua Silva Jardim');
$end1->setBairro('Jardim Glória');

echo $end1.'<br/>';