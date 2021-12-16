<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

function Primo($inicial, $final){

    if(isset($inicial) && isset($final)){

        if(is_numeric($inicial) && is_numeric($final)){

            if($final > $inicial){
                $num_primos = [];

                $numeros = '';
                for($i=($inicial+1); $i<$final; $i++){
                    $divisores = 0;                    

                    for($l=2;$l<$i;){
                        if(($i % $l) == 0) $divisores++;                                                 
                        $l++;
                    }

                    if($divisores==0){
                         $num_primos[]  = $i;               
                         $numeros .= (count($num_primos)>1) ? ', ' : ' ';
                         $numeros .= $i;
                    }
                }

                $count_primos = count($num_primos);

                if($count_primos==0){
                    return "Nenhum número primo entre $inicial e $final";
                } else {
                    return "Encontrados ".$count_primos." números primos, são eles: ".$numeros;
                }                
            } else {
                return "O número inicial não pode ser maior que o número final";
            }
        } else {
            return "Digite valores numéricos";
        }
    } else {
        return "Digite um valor inicial e um valor final.";
    }
}

echo Primo($_GET['inicial'],$_GET['final']);
?>