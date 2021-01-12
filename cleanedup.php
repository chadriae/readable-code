// Things I changed:
// 1. renamed all functions and variables

<?php

// fw = for who
function orderPizza($pizzatype, $forWho)
{
    echo 'Creating new order... <br>';
    $toPrint = 'A ';
    $toPrint .= $pizzatype;
    $p = calculateCost($pizzatype);

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
    echo 'The bill is €' . $p . '.<br>';
    echo "Order finished.<br><br>";
}

function total_price($p)
{
    return $p;
}

function test($p_type)
{
    echo "Test: type is {$p_type}. <br>";
}

function calculateCost($pizzaType)
{
    $cost = 'unknown';
    if ($pizzaType == 'marguerita') {
        $cost = 5;
    } else {
        if ($pizzaType == 'golden') {
            $cost = 100;
        }

        if ($pizzaType == 'calzone') {
            $cost = 10;
        }

        if ($pizzaType == 'hawai') {
            throw new Exception('Computer says no');
        }
    }
    return $cost;
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
    } else {
        // Should not do anything when false
    }
}

make_Allhappy(true);
