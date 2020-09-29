<?php
    if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
    } else {
        $uri = 'http://';
    }
    $uri .= $_SERVER['HTTP_HOST'];
    header('Location: '.$uri.'/dashboard/');
    exit;
?>
Something is wrong with the XAMPP installation :-(
VIMS

This is the third branch code

This is the third branch code need to commit
This is the third branch code need to commit
This is the third branch code need to commit