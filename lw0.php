<?php
function calculator(string $str): string
{
    $operator = '';
    $digit1 = '';
    $digit2 = '';
    $result = '';

    for ($i = 0; $i < strlen($str); ++$i) {

        if (is_numeric($str[$i])) {
            if ($operator === '') {
                $digit1 = $digit1 . $str[$i];
            } else {
                $digit2 = $digit2 . $str[$i];
            }
        } else {
            if ($str[$i] === '+' || $str[$i] === '-') {
                if ($operator !== '' && $digit1 !== '' && $digit2 !== '') {
                    if ($operator === '+') {
                        $digit1 = $digit1 + $digit2;
                    } else {
                        $digit1 = $digit1 - $digit2;
                    }
                    $operator = '';
                    $digit2 = '';
                }
                $operator = $str[$i];
            } else {
                return "ti kto takoy chtob eto delat \n";
            }
        }
    }
    if ($operator !== '' && $digit1 !== '' && $digit2 !== '') {
        if ($operator === '+') {
            $result = $digit1 + $digit2;
        } else {
            $result = $digit1 - $digit2;
        }
    }
    return $result;
}

echo strval(calculator('100-2')) . "\n";
echo strval(calculator('11+200')) . "\n";
echo strval(calculator('1-2')) . "\n";
echo strval(calculator('d-d')) . "\n";
    
    //echo strval(calculator('1+3')) . "\n";