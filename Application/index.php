<?php
if (! isset($_COOKIE['lang'])) {
    $defLang = 'en';
} else {
    $defLang = $_COOKIE['lang'];
}
header('Location:' . $defLang); // 重定向到默认语言
?>