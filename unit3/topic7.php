<!-- Error handling -->
<?php

function divide($x, $y)
{

    if ($y == 0) {
        throw new Exception("\nDenominator must not be zero");
    }
    echo "DIVISION SUCCESSFUL : ";
    return $x / $y;
}
try {
    echo divide(1, 3);
    echo divide(1, 0);
} catch (Exception $e) {
    echo $e->getMessage();
}
