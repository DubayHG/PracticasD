<?php

function multiplo5y7($numero) {
    
    if($_GET['numero'] % 5 == 0 && $_GET['numero'] % 7 == 0){
    	return $_GET['numero'] . ' SI es multiplo de 5 y 7';     
    }else{  
    	return $_GET['numero'] . ' NO es multiplo de 5 y 7';
    }
}

function matriz($a,$b,$min,$max){
    $a = 1; $b = 3; $min = 100; $max = 999; $cont = 0;
    for($x=0;$x<$a;$x++){
        for($y=0;$y<$b;$y++){
            $r[$x][$y]=rand($min,$max);
            echo $r[$x][$y].",  ";
            ++$cont;
        }
        echo "</br>";
        if($a > 0){
            $a = ++$a;
        }
        if($r[$x][0] % 2 != 0 && $r[$x][1] % 2 == 0 && $r[$x][2] % 2 != 0){
            break;
        }
    }
    echo "</br>".$cont . " numeros obtenidos en " . ($a-1) . " iteraciones";
}


?>