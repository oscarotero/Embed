<?php
declare(strict_types = 1);

require dirname(__DIR__).'/vendor/autoload.php';

use Brick\VarExporter\VarExporter;

$lines = file(__DIR__.'/suffix.dat', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$lines = array_filter($lines, fn ($line) => $line[0] !== '/');

file_put_contents(
    dirname(__DIR__).'/src/resources/suffix.php',
    sprintf("<?php\ndeclare(strict_types = 1);\n\nreturn %s;\n", VarExporter::export(array_values($lines)))
);

echo 'Suffix saved'.PHP_EOL;
