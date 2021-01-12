<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function orderPizza($pizzatype, $forWho)
{
    $address = getAddress($forWho);
    $totalPrice = getPrice($pizzatype);

    echo 'Creating new order... <br>';
    echo  "A {$pizzatype} pizza should be sent to {$forWho}.";
    echo '<br>';
    echo "The address: {$address}";
    echo '<br>';
    echo "The bill is €{$totalPrice}.<br>";
    echo 'Order finished.<br><br>';
}

function getAddress($forWho)
{
    $address = 'unknown';
    if ($forWho == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($forWho == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }
    return $address;
}

function getPrice($pizzaType)
{
    switch ($pizzaType) {
        case 'marguerita':
            return 5;
        case 'golden':
            return 100;
        case 'calzone':
            return 10;
        case 'hawai':
            throw new Exception('Computer says no');
    }
}

function makeAllhappy($do_it)
{
    if ($do_it) {
        orderPizza('calzone', 'koen');
        orderPizza('marguerita', 'manuele');
        orderPizza('golden', 'students');
    }
}

makeAllhappy(true);
