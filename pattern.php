<?php
function printTriangle($height) {
    for ($i = 1; $i <= $height; $i++) {
        for ($j = 1; $j <= 2 * $i - 1; $j++) {
            echo "*";
        }
        echo "\n";
    }
}

$height = (int) readline("Enter the height of the triangle: ");
printTriangle($height);
?>
