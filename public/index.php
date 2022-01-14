<?php
$page = $_GET['p'] ?? 'home';
$page = strip_tags($page);
getPage(sprintf(__DIR__ . "/../%s.php", strtolower($page)));

function getPage(string $pageName): void {
    require file_exists($pageName) ? $pageName : __DIR__ . '/../404.php';
}
