<?php
use \Tsugi\Core\LTIX;

if ( ! defined('COOKIE_SESSION') ) define('COOKIE_SESSION', true);

if ( ! isset($CFG) ) {
    require_once __DIR__ . '/tsugi/config.php';
}

$LAUNCH = LTIX::session_start();
LTIX::loginSecureCookie();

$OUTPUT->header();
