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

$lang_code = $lang;

putenv("LC_ALL=$lang_code");
setlocale(LC_ALL, $lang_code);

bindtextdomain("messages", "./locale");
bind_textdomain_codeset("messages", "UTF-8");

textdomain("messages");
