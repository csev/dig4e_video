<?php
/**
 * These are some configuration variables that are not secure / sensitive
 *
 * This file is included at the end of tsugi/config.php
 */

// This is how the system will refer to itself.
$CFG->servicename = 'DIG4E-V';
$CFG->servicedesc = 'OER materials for digitizing video';

// Hub site (dig4e-www) — local sibling checkout vs production
$hubhome = 'https://www.dig4e.com';
if ( isset($CFG->apphome) ) {
    $host = parse_url($CFG->apphome, PHP_URL_HOST);
    if ( in_array($host, array('localhost', '127.0.0.1'), true) ) {
        $parts = parse_url($CFG->apphome);
        $scheme = $parts['scheme'] ?? 'http';
        $port = isset($parts['port']) ? ':' . $parts['port'] : '';
        $hubhome = $scheme . '://' . $host . $port . '/dig4e-www';
    }
}
$CFG->setExtension('hubhome', $hubhome);

// Theme: Michigan blue top nav; site accent for lessons, buttons, and body chrome
$dig4e_menu_blue = '#00274C';
$CFG->theme = array(
    "primary" => "#575294", // site accent — lessons, buttons, links
    "primary-menu" => $dig4e_menu_blue, // top navigation bar (all Dig4E sites)
    "secondary" => "#EEEEEE", // nav text and nav item border color, background of tool menu
    "text" => "#111111", // standard copy color
    "text-light" => "#5E5E5E", // lighter text for elements like "small"
    "font-url" => "https://fonts.googleapis.com/css?family=Raleway%3A400%2C300%2C500%2C600%2C700%2C900&subset=latin%2Clatin-ext",
    "font-family" => "Raleway, Corbel, Avenir, 'Lucida Grande', 'Lucida Sans', sans-serif",
    "font-size" => "16px",
);

$CFG->context_title = "Digitization for Everybody (Dig4E) - Video";

$CFG->tool_folders = array("admin", "../tools", "../mod", "tool");
$CFG->install_folder = $CFG->dirroot.'/../mod';

$CFG->lessons = $CFG->dirroot.'/../lessons.json';

$CFG->giftquizzes = $CFG->dirroot.'/../assess/quiz';

$CFG->tdiscus = $CFG->wwwroot . '/tool/tdiscus/';

// Google Sign-In: set $CFG->google_client_id and $CFG->google_client_secret in tsugi/config.php.
// OAuth consent screen: privacy URL = apphome/privacy, terms URL = apphome/service.
$CFG->google_login_redirect = $CFG->apphome . "/login";

$CFG->sessionlifetime = 18*60*60;  // 18 hours

$CFG->service_worker = true;

$CFG->top_menu_callback = function() {
    global $CFG;
    $buildmenu = $CFG->dirroot.'/../buildmenu.php';
    if ( ! file_exists($buildmenu) ) {
        return false;
    }
    require_once $buildmenu;
    return buildMenu();
};
