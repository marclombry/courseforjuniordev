<?php 

for($i=0;$i <5; $i++){
    echo '$i = '. $i;
}

$counter =0;
while($counter <3) {
    echo 'counter :'.$counter;
    $counter++;
}

$listes = ['PHP','JAVA','SQL'];

foreach($listes as $liste)
{
    echo $liste.'<br>';
}

$users = [
    'firstname' => 'john',
    'lastname' => 'doe',
    'age' => 55
];

foreach($users as $key => $value)
{
    echo $key.' : '. $value;
}