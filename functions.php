<?php

return (function () {
    $var = null;

    $values = [
        "",
        " ",
        FALSE,
        TRUE,
        array(),
        NULL,
        "0",
        0,
        0.0,
        $var,
        "\0"
    ];

    $labels = [
        '"" (an empty string)',
        '" " (space)',
        'FALSE',
        'TRUE',
        'array() (an empty array)',
        'NULL',
        '"0" (0 as a string)',
        '0 (0 as an integer)',
        '0.0 (0 as a float)',
        'var $var; (a variable declared, but without a value)',
        'NULL byte ("\ 0")'
    ];


    $table = '<table>';

    $table .= "<tr><th>Value of variable ($var)</th><th>isset($var)</th><th>empty($var)</th><th>is_null($var)</th></tr>";

    foreach ($labels as $index => $label) {

        $issetVal = var_export(isset($values[$index]), true);
        $emptyVal = var_export(empty($values[$index]), true);
        $isNullVal = var_export(is_null($values[$index]), true);

        $table .= "<tr><td>{$label}</td><td>bool({$issetVal})</td><td>bool({$emptyVal})</td><td>bool({$isNullVal})</td></tr>";
    }

    $table .= '</table>';

    return $table;
})();