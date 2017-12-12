<?php

class Carro {
    
    private $id;
    private $marca; 
    private $modelo;
    private $preco; 
    private $precoDoSeguro;
    private $cor;
    private $dono; 
    private $placa;
    
    public function __construct($id, $marca, $modelo, $preco, $cor, $dono, $placa) {
        $this->id = $id;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->preco = $preco;
        $this->cor = $cor;
        $this->dono = $dono;
        $this->placa = $placa;
    }
    
    function getId() {
        return $this->id;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getPreco() {
        return $this->preco;
    }

    public function getPrecoDoSeguro() {
        return $this->precoDoSeguro;
    }

    public function getCor() {
        return $this->cor;
    }

    public function getPlaca() {
        return $this->placa;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }

    public function setPrecoDoSeguro($precoDoSeguro) {
        $this->precoDoSeguro = $precoDoSeguro;
    }

    public function setCor($cor) {
        $this->cor = $cor;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }
    
    public function getDono() {
        return $this->dono;
    }
}
