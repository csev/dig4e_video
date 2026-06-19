<?php

$foot = '
<p style="font-size: 75%; margin-top: 5em;">
<a href="'.$CFG->apphome.'/privacy">Privacy Policy</a> |
<a href="'.$CFG->apphome.'/service">Terms of Service</a><br/>
<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/80x15.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.
</p>';

$OUTPUT->setAppFooter($foot);

$OUTPUT->footer();
