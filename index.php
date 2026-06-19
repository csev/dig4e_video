<?php
use \Tsugi\Util\Net;
use \Tsugi\Core\LTIX;
use \Tsugi\UI\Output;

if ( ! defined('COOKIE_SESSION') ) {
    define('COOKIE_SESSION', true);
}

require_once "sanity.php";
require "top.php";
require "nav.php";
?>
<div id="container">
<!--
<div style="margin-left: 10px; float:right">
<iframe width="400" height="225" src="" frameborder="0" allowfullscreen></iframe>
</div>
-->
<div id="grid-container" style="display: grid; grid-template-columns: 10% 90%;">
<img src="https://image.dig4e.com/images/imaginglogo.png" alt="Dig4E Imaging Logo" style = "width: 8em; height: 8em; grid-column: 1/2; border: 10 px; margin: 20px;"/>
<h1 style="color: #575294; font-weight: 600; font-family: Raleway, Sans-Serif; font-size: 3em;grid-column: 2/2; padding-top: 1em; padding-left: 1em;">Digitization for Everybody - Video</h1>
</div>
<div id="container" style="dispalay: container; background-color: #575294; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="container" style= "color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px; margin-bottom: 1em;" >
In the Dig4E Video module, you learn about the present state of standards and recommended best practices for transforming the complex analog signals stored on videotape into encoded digital files wrapped in a standardized digital container. Some of the standards for digitization are stable while others are emergent, incompatible, or inconsistent. The module will help you understand where the technical uncertainties lie. Cultural heritage organizations should proceed with digitization while exercising caution.</div>
<div id="container" style="dispalay: container; background-color: #575294; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="grid-container" style="display: grid; grid-template-columns: 30% 70%;">
<iframe width="300" height="200" src="https://www.youtube.com/embed/Ttf3hTa-aVc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><p style="color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px;grid-column: 2/2; padding-top: 1em;">This video introduces the Video module in the broader context of the risks and challenges to audiovisual heritage. The primary points are to balance media complexity and the absence of full consensus on standards, on the one hand, with the risk of inaction and the critical value of emergent digital processes. The video introduction emphasizes documentation and transparency and summarizes the top level learning goals for the Video module.</p>
</div>
<div id="container" style="dispalay: container; background-color: #575294; height: 1em; margin-top: 1em; margin-bottom: 1em;">
</div>
<div id="grid-container" style ="display: grid; grid-template-columns: 50% 50%; grid-row-gap: 1em;" hover="background-color: rgba(158, 79, 0, 0.2);">
<a href="https://video.dig4e.com/lessons"><img src="https://image.dig4e.com/images/lessons.png" alt="Lessons Logo" style= "width: 10em; height 10em; position: inline; margin-left: 35%; margin-right: 35%; hover: #9E4F002E"/></a>
<a href="https://video.dig4e.com/assignments"><img src="https://image.dig4e.com/images/quizzes.png" alt="Quizzes Logo" style= "width: 10em; height 10em; position: inline; margin-left: 35%; margin-right: 50%;"/></a>
<a href="https://video.dig4e.com/lessons" style="color: #00274C; font-family: Raleway, Sans-Serif; font-weight: 500; font-size: 2em; position: inline; margin-left: 39%; margin-right: 46%; grid-column: 1; grid-row: 2">Lessons</a>
<a href="https://video.dig4e.com/assignments" style="color: #00274C; font-family: Raleway, Sans-Serif; font-weight: 500; font-size: 2em; position: inline; margin-left: 39%; margin-right: 46%; grid-column: 2; grid-row: 2">Quizzes</a>
</div>
<div style="color: #555555; font-family: Lusitana, Serif; font-weight: 500; font-size: 18px; margin-top: 2em;">
<p>
If you <a href="login">log in</a> with your Google account you can track progress,
earn badges, and use autograded quizzes on this site.
</p>
<p>
We take your privacy seriously. Please review our
<a href="privacy">Privacy Policy</a> and
<a href="service">Terms of Service</a>.
</p>
</div>
<?php if ( isset($_SESSION['id']) ) { ?>
<?php } else { ?>
<?php } ?>
<!--
<?php
echo("IP Address: ".Net::getIP()."\n");
echo(Output::safe_var_dump($_SESSION));
var_dump($USER);
?>
-->
</div>
<?php
require "foot.php";