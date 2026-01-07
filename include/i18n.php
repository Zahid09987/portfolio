<?php
session_start();

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en_US';
}

$lang_file = __DIR__ . "../locale/" . $lang . ".json";

if (!file_exists($lang_file)) {
    $lang_file = __DIR__ . "../locale/en_US.json";
}

$json_content = file_get_contents($lang_file);
$translations = json_decode($json_content, true);

function t($key)
{
    global $translations;

    if (isset($translations[$key])) {
        return $translations[$key];
    } else {
        return "[$key]";
    }
}
