<?php

include '../src/function.php';

echo sayHello();

echo '<br>';
echo '<br>';

$group = [
    'Dr. Manhattan', 
    'Ozymandias', 
    'Silk Spectre', 
    'Rorschach', 
    'The comedian', 
    'Nite Owl'
];

echo whoAmI('The actor', $group);