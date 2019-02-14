<?php
define('BASE_DIR', './');
require_once 'conf.php';
/*echo '<pre>';
print_r($sess);
echo '</pre>';*/

$mainTmpl = new Template('mail');

$mainTmpl->set('title', 'Menu Application');
$mainTmpl->set('page title', 'Tartu KHK Menu');

$contentTmpl = new Template('content');
$courseCardTmpl = new Template('course_card');
$courseCardHeaderTmpl = new Template('course_card_header');
$courseCardTmpl->set('course_card_header', $courseCardHeaderTmpl->parse());
$contentTmpl->add('course_cards', $courseCardTmpl->parse());
$contentTmpl->add('course_cards', $courseCardTmpl->parse());
$contentTmpl->add('course_cards', $courseCardTmpl->parse());
$contentTmpl->add('course_cards', $courseCardTmpl->parse());

$mainTmpl->set('content', $contentTmpl->parse());

$mainTmplContent = $mainTmpl->parse();
echo $mainTmplContent;
?>