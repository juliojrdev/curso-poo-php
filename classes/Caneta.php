<?php

class Caneta {
    public string $modelo;
    public string $cor;
    private float $ponta;
    protected float $carga;
    protected bool $tampada;

    public function rabiscar(){
        if($this->tampada == true){
            echo "<p>ERRO! Não posso rabiscar, estou tampada.</p>";
        }else{
            echo "<p>Estou rabiscando...</p>";
        }        
    }

    private function tampar(){
        $this->tampada = true;
    }

    private function destampar(){
        $this->tampada = false;
    }
}