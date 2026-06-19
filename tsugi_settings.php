<?php
/**
 * These are some configuration variables that are not secure / sensitive
 *
 * This file is included at the end of tsugi/config.php
 */

// This is how the system will refer to itself.
$CFG->servicename = 'DIG4E-V';
$CFG->servicedesc = 'OER materials for digitizing video';

// Theme like the Dig4E Video site
$CFG->theme = array(
    "primary" => "#575294", // nav background, splash background, buttons, text of tool menu
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

$CFG->tdiscus = $CFG->wwwroot . '/tool/tdiscus/';

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
