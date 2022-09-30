<?php

function sayHello(string $name = "Dr Manhattan") : string
{
    return "Hello $name";
}

function whoAmI(string $name, array $watchmen) : string
{
    if (in_array($name, $watchmen))
        return "$name est un watchmen.";
    return "C'est un intrus !";
}