<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

function Sequencia($array){

    //Usando string para visualização em tela
    $res = "false";

    sort($array);
    for($i=0;$i<count($array);$i++){  
        $remove[$i] = $array;
        array_splice($remove[$i],$i,1);        
        $ok = 0;
        for($l=0;$l<count($remove[$i]);$l++){
            if($l>0){
                $anterior = $remove[$i][($l-1)];
                if($anterior==($remove[$i][$l]-1))
                $ok++;
            }            
        }
        

        if((count($array)-2)==$ok)
            $res = "true";
    }

return $res;

}

$a = [1,1];
print_r($a);
echo Sequencia($a);

?>