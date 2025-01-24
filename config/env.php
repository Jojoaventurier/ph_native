<?php

function loadEnv($filePath)
{
    if (!file_exists($filePath)) {
        throw new Exception("Environment file not found: $filePath");
    }

    $variables = parse_ini_file($filePath, true, INI_SCANNER_RAW);
    foreach ($variables as $key => $value) {
        $_ENV[$key] = $value;
    }
}