<?php
// Things I changed:
// 1. renamed all functions and variables
// 2. got rid of all dead and test code
// 3. switch operator in stead of if else statements

function orderPizza($pizzatype, $forWho)
{
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $totalPrice = calculateCost($pizzatype);

    $address = 'unknown';
    if ($forWho == 'koen') {
        $address = 'a yacht in Antwerp';
    } elseif ($forWho == 'manuele') {
        $address = 'somewhere in Belgium';
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
    }

    $toPrint .=   ' pizza should be sent to ' . $forWho . ". <br>The address: {$address}.";
    echo $toPrint;
    echo '<br>';
    echo 'The bill is €' . $totalPrice . '.<br>';
    echo "Order finished.<br><br>";
}


function calculateCost($pizzaType)
{
    $cost = 0;
    switch ($pizzaType) {
        case 'marguerita':
            $cost = 5;
            return $cost;
            break;
        case 'golden':
            $cost = 100;
            return $cost;
            break;
        case 'calzone':
            $cost = 10;
            return $cost;
            break;
        case 'hawai':
            throw new Exception('Computer says no');
            break;
    }
}

function orderPizzaAll()
{
    orderPizza('calzone', 'koen');
    orderPizza('marguerita', 'manuele');
    orderPizza('golden', 'students');
}

function make_Allhappy($do_it)
{
    if ($do_it) {
        orderPizzaAll();
    }
}

make_Allhappy(true);
