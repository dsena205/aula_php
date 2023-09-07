<?php

    class Conta
    {
        var $agencia;
        var $codigo; 
        var $dataDecriacao; 
        var $titulo; 
        var $senha; 
        var $saldo;
        var $cancelada; 
    

        function retirar($quantia)
        {
            if($quantia > 0){
                $this->saldo -= $quantia; 
            }
        }

        function depositar($quantia){
            if($quantia > 0){
                $this->saldo += $quantia;
            }
        }
        
        function obterSaldo(){
                return $this->saldo; 
        }


        function __construct($agencia,$codigo,$dataDecriacao,$titulo,$senha,$saldo,$cancelada)
        {

            $this->agencia= $agencia;
            $this->codigo = $codigo;
            $this->dataDecriacao =$dataDecriacao;
            $this->titulo =$titulo;
            $this->senha = $senha;

            //chamada a outro método da classe
            $this->depositar($saldo);
            $this->cancelada = false;
        }
         // metodo destrutor finaliza o projeto

          function __destruct(){
            echo "<br>Objeto{$this->nome} finalizado ... <br>";
          }




    }