<?php

function titleContentValidation($value1){
    if($value1==''){
        throw new InvalidArgumentException("<p class='error'>Page title can't be empty!</p>", 1);       
    }
    else if(strlen($value1)<=2){
        throw new InvalidArgumentException("<p class='error'>Page title must have no less than 3 characters</p> ", 1);  
        
    }
    return true;
}


?>