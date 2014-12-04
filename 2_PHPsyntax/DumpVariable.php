<?php

function getVariableType($variable){
    $typeOfVariable = gettype($variable);
    if($typeOfVariable == 'integer' || $typeOfVariable == 'float' || $typeOfVariable == 'double' ){
        echo var_dump($variable);
}
    else{
    echo $typeOfVariable . '<br/>';
}
}
getVariableType("hello");
getVariableType(15);
getVariableType(1.234);
getVariableType(array(1,2,3));
getVariableType((object)[2,34]);


?>