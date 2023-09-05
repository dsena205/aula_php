<?php


        include_once 'Pessoa.php';
        include_once 'Conta.php';


        $carlos= new Pessoa;
        $carlos->Codigo = 10;
        $carlos->Nome = "Carlos da Silva";
        $carlos->Altura = 1.85;
        $carlos->idade = 25;
        $carlos->Nascimento = '10/04/1976';
        $carlos->Escolaridade = "Ensino Médio";

        echo "Manipulando o objeto $carlos->Nome :\n"; 
        echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n<br>";
        $carlos->Formar ('Técnico em Eletricidade'); 
        echo "{$carlos->Nome} é formado em: {$carlos->Escolaridade} \n<br>"; 
        echo "{$carlos->Nome} possui {$carlos->idade} anos \n<br>";
        $carlos->Envelhecer (1);
        echo "{$carlos->Nome} possui {$carlos->idade} anos \n<br>";


        $conta_carlos = new Conta;
        $conta_carlos->agencia = 6677;
        $conta_carlos->codigo = "CC.12 34. 56";
        $conta_carlos->dataDeCriacao = "10/07/02";
        $conta_carlos->titular = $carlos;
        $conta_carlos->senha = 9876;
        $conta_carlos->saldo = 567.89;
        $conta_carlos->cancelada = false;
        
        echo "\n";
        echo "Manipulando a conta de: {$conta_carlos->titular->nome} \n"; echo "O saldo atual é R\$ {$conta_carlos->ObterSaldo()} \n";
        $conta_carlos->Depositar (20);
        echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} \n";
        $conta_carlos->Retirar(10);
        echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} \n";


?>