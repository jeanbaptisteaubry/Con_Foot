<?php

class ExceptionDivParZero extends Exception
{
    public function __construct()
    {
        parent::__construct("Division par zéro interdite");
    }
}

function inverse($x) {
    if (!$x) {
        throw new ExceptionDivParZero();
    }
    if($x > 1000000000)
        throw new Exception("Nombre trop grand");
    return 1/$x;
}

try {
    echo "valeur : ";
    $var = readline();
    echo inverse($var) . "\n";
}catch (ExceptionDivParZero $e) {
    echo "ExceptionDivParZero : " . $e->getMessage() . "\n";
}
catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
} finally {
    echo "Fini !\n";
}

