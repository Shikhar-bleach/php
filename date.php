<?php
function findValidDate($string) {
    $words = explode(" ", $string);
    foreach ($words as $word) {
        if (strlen($word) === 8 && ctype_digit($word)) {
            $month = substr($word, 0, 2);
            $day = substr($word, 2, 2);
            $year = substr($word, 4, 4);
            if ($month >= 1 && $month <= 12 && $day >= 1 && $day <= 31 && $year >= 1900 && $year <= 2099) {
                return $word;
            }
        }
    }
    return "No valid date found";
}

$input = readline("Enter a string: ");

echo "Valid date found: " . findValidDate($input);
?>
