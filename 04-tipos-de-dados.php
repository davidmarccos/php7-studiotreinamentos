<?php
/**************** Escalares ********************/

//string
$nome = "Olá mundo 123";
var_dump($nome);
if(is_string($nome)):
    echo "É uma string";
else:
    echo "não é uma string";
endif;
echo "<hr>";

// int
$idade = -27;
var_dump($idade);
if(is_int($idade)):
    echo "É um inteiro";
else:
    echo "não é um inteiro";
endif;
echo "<hr>";

// float
$idade = 1.27;
var_dump($altura);
if(is_float($altura)):
    echo "É um float";
else:
    echo "não é um float";
endif;
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if(is_float($admin)):
    echo "É um booleano";
else:
    echo "não é um booleano";
endif;
echo "<hr>";

/**************** compostos ********************/

//array
$carros = array("gol","uno","camaro",12,20.6,true);
var_dump($carros);
if(is_array($carros)):
    echo "É um array";
else:
    echo "não é um array";
endif;
echo "<hr>";

//object
class Cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("david");
var_dump("$cliente");
if(is_object($cliente)):
    echo "É um objeto";
else:
    echo "não é um objeto";
endif;
echo "<hr>";

/**************** especiais ********************/

//NULL
$cidade = NULL;
var_dump(expression);

