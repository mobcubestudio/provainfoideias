<?php
function SeculoAno($ano){

    if(!is_numeric($ano)){
        return "Não é um ano válido.";
    } else {
        if(substr($ano,2,2)==00){
            $seculo = substr($ano,0,2);
        } else {
            $seculo = (substr($ano,0,2)+1);
        }
        
        return "Ano: ".$ano." = Século: ".$seculo;;
    }

    
}
$ano = $_GET['ano'];
echo SeculoAno($ano);
?>