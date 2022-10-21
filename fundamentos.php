<?php
/**
 * Fundamentos PHP
 */

 // php fundamentos.php = executa o programa no terminal
 //Tipagem dinâmica não precisa especificar o tipo.
// $nome = "Guilherme"; //string   //declaração e atribuição...
// $idade = 20;         //inteiro
// $peso = 60;      //float
// $altura = 1.71;      //float
//echo "Nome: " . $nome; IA KITE

$nome = $_REQUEST('nome');
$idade = $_REQUEST('idade');
$peso = $_REQUEST('peso');
$altura = $_REQUEST('altura');

// % + s = corresponde ao tipo String
// %8.2 + f = corresponde a 8 casas e 2 decimais do tipo float.

// printf("Nome: %s\nIdade: %d\nPeso: %8.2f\n", $nome, $idade, $peso);


//$imc = calcularIMC($peso, $altura);

// versão em função anônima (funcional)...
//$imc = function($nome, $peso, $altura){
    // $ret = $peso / pow($altura, 2);
    // return sprintf("%s tem IMC: %8.2f\n", $nome, $ret);
// };

$imc = calcularIMC($peso, $altura);
$classificacao = classificarIMC($imc);

//printf("%s tem IMC: %8.2f\n", $nome, $imc);

printf("%s tem peso = %8.2f, altura = %8.2f; e seu IMC é = %8.2f;\nPortanto a classificação segundo o Ministério da Saúde é: %s.", 
                $nome, $peso, $altura, $imc, $classificacao);

/**
 * Função para calcular o IMC
 * @param float $altura
 * @param float $peso
 */

// versão procedural
function calcularIMC($peso, $altura){
   return $peso / pow($altura, 2);
}

/**
 * Classificar o IMC
 * @param float $imc
 * @return string "classificação"
 */
function classificarIMC($imc){
    $ret = 0.0;
    if($imc < 18.5){
        $ret = "baixo peso.";
    } else if ($imc > 18.5 && $imc < 24.9){
        $ret = "peso normal";
    } else if ($imc > 24.9 && $imc < 29.9){
        $ret = "excesso de peso";
    } else if ($imc > 29.9 && $imc <34.9){
        $ret = "obesidade classe 1";
    } else if ($imc > 34.9 && $imc <39.9){
        $ret = "obsesidade classe 2";
    } else if ($imc >=40 ){
        $ret = "obesidade classe 3";
    }

    return $ret;
}