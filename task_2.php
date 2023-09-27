<?php
function removeEvenNumbers(&$numbers) {
    
    foreach ($numbers as $key => $value) {
        if ($value % 2 == 0) {
            unset($numbers[$key]);
        }
    }
    
    
    $numbers = array_values($numbers);
    
    
    print_r($numbers);
}


$numbers = range(1, 10);

removeEvenNumbers($numbers);
?>
