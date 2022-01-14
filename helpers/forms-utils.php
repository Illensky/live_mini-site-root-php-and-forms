<?php

/**
 * Return a secured string POST data by provided name.
 * @param string $name
 * @return string ... empty string if null
 */
function getSecuredStringData(string $name):string {
    $data = $_POST[$name] ?? '';
    return strip_tags($data);
}

/**
 * Return a secured string POST data by provided name.
 * @param string $name
 * @param int $defaultValue
 * @return int
 */
function getSecuredIntData(string $name, int $defaultValue = 0):int {
    $data = $_POST[$name] ?? $defaultValue;
    return (int)$data;
}