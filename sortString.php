<?php


function customSort($string) {
    $lowercaseChars = $uppercaseChars = $numbers = '';

    for ($i = 0; $i < strlen($string); $i++) {
        $char = $string[$i];
        if (ctype_lower($char)) {
            $lowercaseChars .= $char;
        } elseif (ctype_upper($char)) {
            $uppercaseChars .= $char;
        } elseif (is_numeric($char)) {
            $numbers .= $char;
        }
    }

    $lowercaseChars = str_split($lowercaseChars);
    $uppercaseChars = str_split($uppercaseChars);
    $numbers = str_split($numbers);

    sort($lowercaseChars);
    sort($uppercaseChars);
    sort($numbers);

    $sortedString = implode('', $lowercaseChars) . implode('', $uppercaseChars) . implode('', $numbers);

    return $sortedString;
}

$inputString = "HiImkeVInANDim17";
$sortedString = customSort($inputString);
echo $sortedString;







