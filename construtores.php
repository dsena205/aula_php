<?php
 include_once 'Pessoa.php';
 include_once 'Conta.php';

 #criaçao do objeto $carlos
 $carlos = new Pessoa(10,"Carlos da Silva",1.85,25,"1010411976","Ensino Medio",650.00);
  echo "Manipulando objeto {$carlos->nome}: <br>";
  echo"<br>";
  echo"{$carlos->nome} é formado em:{$carlos->escolaridade}<br>";

  $carlos->formar('Tecnico em desenvolvimento de sistemas');
  echo"{$carlos->nome} é formado em:{$carlos->escolaridade}<br>";

  $carlos->envelhecer(1); 
    echo"{$carlos->nome} possui {$carlos->idade} anos <br>" ;
 
    #criação do objeto carlos 

    $conta_carlos = new Conta (6677, "CC.1234.56","10/07/02", $carlos, 9876, 567.87);

    echo "<br>";

    echo "Manipulando conta de {$conta_carlos->titular->nome}: <br>";
    echo "o saldo atual é R\${$conta_carlos->obterSaldo()}: <br>";

    $carlos_Carlos->depositar(20);
    echo "o saldo atual é R\${$conta_carlos->obterSaldo()}: <br>";
    
    $carlos_Carlos->retirar(10);
    echo "o saldo atual é R\${$conta_carlos->obterSaldo()}: <br>";
    


?>