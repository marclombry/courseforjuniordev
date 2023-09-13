<?php 
$name = 'marc';
//if 
if($name == 'marc')
{
    var_dump('in if');
}

// if else
if($name == 'john')
{
    var_dump('in if');
} else {
    var_dump('in else');
}

// if else 
if($name == 'farid'){
    var_dump('in if');
} elseif($name =='sara') {
    var_dump('in elseif');
} else {
    var_dump('in else');
}

// switch 
switch ($name) {
    case 'marc':
        echo "marc";
        break;
    case 'sara':
        echo "sara";
        break;
    case 'farid':
        echo "farid";
        break;
    default: 
        echo "autre nom";
}

