<?php

class Cliente extends Pessoa
{

    public $pontos;
   
    public function somaPontos($pontos){
    $this->validaPontos();
    $this->pontos= $this->pontos +$pontos;
        }
    
    public function validaPontos(){
        //Verifica a validade de pontos
    }
    public function getPontos (){
        $this->validaPontos();
        echo $this->pontos;

    }
}
