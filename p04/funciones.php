<?php

function multiplo5y7($numero) {
    
    if($_GET['numero'] % 5 == 0 && $_GET['numero'] % 7 == 0){
    	return $_GET['numero'] . ' SI es multiplo de 5 y 7';     
    }else{  
    	return $_GET['numero'] . ' NO es multiplo de 5 y 7';
    }
}

?>