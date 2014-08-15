<?php
// 获取网页内容
function get_content($url)
{
    $ch = curl_init();
    $timeout = 5;
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $contents = '<div id="content" class="container">';
    $contents .= curl_exec($ch);
    $contents .= '</div>';
    curl_close($ch);
    echo $contents;
}

// 语言设置
function setLang($lang)
{
    setcookie('lang', $lang, 0, '/'); // 设置默认语言
    putenv("LC_ALL=$lang");
    setlocale(LC_ALL, $lang);
    $domain = 'abc';
    bindtextdomain($domain, "../../../Public/locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    textdomain($domain);
}