<?php
function math($a,$b = 5,$op='Subract'){
    if($op=='Add'){
        return $a+$b;
    }
    elseif($op == 'Multiply'){
        return $a*$b;
    }
    elseif($op =='Division'){
        return $a/$b;
    }
    return $a-$b;
}

echo math(10,op:'Multiply'); //Named arguments if we want to skip the second arg then we can give the variable name of third arg and assume the value

