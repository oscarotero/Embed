<?php

$input = __DIR__.'/public_suffix_list.dat';
$output = __DIR__.'/public_suffix_list.php';

$lines = file($input, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

$lines = array_filter($lines, function ($line) {
    return $line[0] !== '/';
});

$php = "<?php\n\nreturn ".var_export(array_values($lines), true).";\n";
$php = str_replace('array (', 'array(', $php);

file_put_contents($output, $php);
