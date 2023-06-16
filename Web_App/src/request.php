<?php
$error = true;

if ($uri == 'about') {
    include_once('./public/about/index.php');
    $error = false;
}
if ($uri == 'settings') {
    include_once('./public/settings/index.php');
    $error = false;
}
if ($uri == 'general') {
    include_once('./public/general/index.php');
    $error = false;
}
if ($uri == 'forum') {
    include_once('./public/forum/index.php');
    $error = false;
}

if ($uri == 'overview') {
    include_once('./public/overview/index.php');
    $error = false;
}

if ($uri == '') {
    include_once('./public/index.php');
    $error = false;
}

if ($error) {
    include_once('./public/404.php');
}

?>