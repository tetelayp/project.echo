<?php
require __DIR__ . '/autoload.php';

$c = new \App\Collection;
$c[] = 1;
$c[1] = 23;
$c[]=335;
foreach ($c as $a){
    echo $a.'<br>';
}

$z=[];
$z[]=11;
$z[]=22;
$z[]=33;
$z[]=44;
var_dump(array_key_exists(2,$z));