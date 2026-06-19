<?php

function buildMenu() {
    global $CFG;
    $R = $CFG->apphome . '/';
    $T = $CFG->wwwroot . '/';
    $set = new \Tsugi\UI\MenuSet();
    $hub = $CFG->getExtension('hubhome', 'https://www.dig4e.com');
    $set->setHome('<img src="'.$CFG->apphome.'/images/dig4e-logo-transparent.png" style="height: 1em;" alt="Link back to main Digitization for Everybody Site"/>', $hub);
    $set->addLeft($CFG->servicename, $CFG->apphome);
    if ( isset($CFG->lessons) ) {
        $set->addLeft('Lessons', $R.'lessons');
    }

    if ( isset($_SESSION['id']) ) {
        $submenu = new \Tsugi\UI\Menu();
        $submenu->addLink('Profile', $R.'profile');
        if ( isset($CFG->google_map_api_key) ) {
            $submenu->addLink('Map', $R.'map');
        }
        $submenu->addLink('Badges', $R.'badges');
        if ( file_exists(__DIR__.'/materials.php') ) {
            $submenu->addLink('Materials', $R.'materials');
        }
        if ( isset($CFG->providekeys) && $CFG->providekeys ) {
            $submenu->addLink('LMS Integration', $T . 'settings');
        }
        if ( isset($CFG->google_classroom_secret) ) {
            $submenu->addLink('Google Classroom', $T.'gclass/login');
        }
        $submenu->addLink('Free App Store', 'https://www.tsugicloud.org');
        if ( isset($CFG->DEVELOPER) && $CFG->DEVELOPER ) {
            $submenu->addLink('Test LTI Tools', $T . 'dev');
        }
        if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
            $submenu->addLink('Administer', $T . 'admin/');
        }
        $submenu->addLink('Logout', $R.'logout');
        if ( isset($_SESSION['avatar']) ) {
            $set->addRight('<img src="'.$_SESSION['avatar'].'" style="height: 2em;"/>', $submenu);
        } else {
            $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
        }
    } else {
        $set->addRight('Login', $R.'login');
    }

    $set->addRight('Instructor', 'https://www.linkedin.com/in/paul-conway-b033149/');

    return $set;
}
