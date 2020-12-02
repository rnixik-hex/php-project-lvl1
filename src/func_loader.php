<?php

foreach (glob(__DIR__ . '/*.php') as $fileName) {
    if ($fileName === __FILE__) {
        continue;
    }
    include_once $fileName;
}
