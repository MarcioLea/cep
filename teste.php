<?php

    require_once 'vendor/autoload.php';

    use Marcio\Cep\Buscar;

    $busca = new Buscar;

    $resultado = $busca->getAddressFromZipCode('23894750');

    print_r($resultado);
?>