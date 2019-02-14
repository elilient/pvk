<?php
define('BASE_DIR', './');
require_once 'conf.php';
/*echo '<pre>';
print_r($sess);
echo '</pre>';*/

$mainTmpl = new Template('mail');

$mainTmpl->set('title', 'Menu Application');
$mainTmpl->set('page title', 'Tartu KHK Menu');
$mainTmplContent = $mainTmpl->parse();

echo $mainTmplContent;

?>