<?php
// Things I changed:
// 1. renamed all functions and variables
// 2. got rid of all dead and test code
// 3. switch operator in stead of if else statements
// 4. seperate function to determine address
// 5. just one function to make everyone happy

function orderPizza($pizzatype, $forWho)
{
    $address = findAddress($forWho);
    $totalPrice = calculateCost($pizzatype);

    echo 'Creating new order... <br>';
    echo  'A ' . $pizzatype . ' pizza should be sent to ' . $forWho . '.';
    echo '<br>';
    echo 'The address: ' . $address;
    echo '<br>';
    echo 'The bill is €' . $totalPrice . '.<br>';
    echo 'Order finished.<br><br>';
}

function findAddress($forWho)
{
    $address = 'unknown';
    if ($forWho == 'koen') {
        $address = 'a yacht in Antwerp';
        return $address;
    } elseif ($forWho == 'manuele') {
        $address = 'somewhere in Belgium';
        return $address;
    } elseif ($forWho == 'students') {
        $address = 'BeCode office';
        return $address;
    }
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

function make_Allhappy($do_it)
{
    if ($do_it) {
        orderPizza('calzone', 'koen');
        orderPizza('marguerita', 'manuele');
        orderPizza('golden', 'students');
    }
}

make_Allhappy(true);
