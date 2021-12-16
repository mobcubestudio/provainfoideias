<?php
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);

    $sorteados = [];

    for($i=0;$i<20;$i++){
        $sorteados[] = mt_rand(1,10);        
    }

    echo "Sorteados: ";
    print_r($sorteados);

    echo "<br /><br />";
    
    $all = array_keys(array_filter(array_count_values($sorteados), function($r){
        return $r == 1;
    }));

    $unicos = '';
    for($i=0;$i<count($all);$i++){
        $unicos .= ($i>0) ? ', ' : '';
        $unicos .= $all[$i];
    }

    echo "Números únicos: ".$unicos;
    
?>