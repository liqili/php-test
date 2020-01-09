<?php
$input1 = "shoes, boots, heels, clothing";
$input2 = "shoes, headgear, gloves for skiing";
var_dump(splitByComma(null));
var_dump(splitByComma(''));
var_dump(splitByComma($input1));
var_dump(splitByComma($input2));

function splitByComma($input): array
{
    return array_map(function ($item) {
        return trim($item);
    }, checkContainsForOrOf($input) ? [$input] : explode(',', $input));
}

function checkContainsForOrOf($input): bool
{
    $arr =  explode(" ", $input);

    foreach ($arr as $item) {
        if (strcasecmp('of', $item) == 0 || strcasecmp('for', $item) == 0)
            return true;
    }
    return false;
}
