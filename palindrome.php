<?php
function is_palindrome($string){
    $string=str_ireplace(' ','',strtolower($string));
   return($string==strrev($string));
}
$string ="Re paper";
if(is_palindrome($string))
{
    echo "<p>$string is a palindrome</p>";
}
else{
    echo "<p>$string is not a palindrome</p>";
   // str_replace()
   // str_ireplace()
}