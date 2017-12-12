<?php
require_once '../model/Carro.php';

class Controller {
    const PRECO_SEGURO = 0.15;
    
    private $carros_id = 0;
    private $carros = [];
    
    public function cadatrarCarro($marca, $modelo, $preco, $cor, $dono, $placa) {
        if (!$this->verificarPlaca($placa)) {
            $carro = new Carro($this->carros_id++, $marca, $modelo, $preco, $cor, $dono, $placa);
            array_push($this->carros, $carro);
        }        
    }
    
    private function verificarPlaca($placa) {
        foreach ($this->carros as $carro) {
            if ($carro->getPlaca() === $placa) {
                return true;
            }
        }
        return false;
    }
    
    public function calcularPrecoSeguro($carro_id) {
        $carro = $this->buscarCarroPorId($carro_id);
        if ($carro != null) {
            $carro->setPrecoDoSeguro($carro->getPreco() * self::PRECO_SEGURO);
            return $carro->getPrecoDoSeguro();
        }
        return null;
    }
    
    private function buscarCarroPorId($carro_id) {
        foreach ($this->carros as $carro) {
            if ($carro->getId() == $carro_id) {
                return $carro;
            }
        }
        return null;
    }
    
    public function validaCpf($cpf) {
        $cpf_soma_inicio = (int) substr($cpf, 0, 1) + (int) substr($cpf, 1, 1) + (int) substr($cpf, 2, 1) + (int) substr($cpf, 3, 1) + (int) substr($cpf, 4, 1) + (int) substr($cpf, 5, 1) + (int) substr($cpf, 6, 1) + (int) substr($cpf, 7, 1) + (int) substr($cpf, 8, 1);
        $cpf_soma_final = (int) substr($cpf, 9, 2);
        if ($cpf_soma_inicio == $cpf_soma_final) {
            return true;
        } else {
            return false;
        }
    }

    function getCarros() {
        return $this->carros;
    }
}
