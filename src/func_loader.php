<?php

$directoriesToScan = [
    '.',
    'Games',
];

foreach ($directoriesToScan as $directory) {
    foreach (glob(__DIR__ . '/' . $directory . '/*.php') as $fileName) {
        if ($fileName === __FILE__) {
            continue;
        }
        include_once $fileName;
    }
}
