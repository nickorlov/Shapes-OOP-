<?php

require __DIR__ . '/../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;

$inputFileType = 'Xlsx';
$inputFileName = __DIR__ . '/files/names.xlsx';

$reader = IOFactory::createReader($inputFileType);
$spreadsheet = $reader->load($inputFileName);

$writer = IOFactory::createWriter($spreadsheet, 'Html');

$writer->save(__DIR__ . '/files/test.html');

echo 'Find your HTML file in \web\files directory';