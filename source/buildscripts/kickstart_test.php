<?php
/**
 * @copyright Copyright (c)2008-2018 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license     GNU GPL v2 or - at your option - any later version
 * @package     akeebabackup
 * @subpackage  kickstart
 */

define('KSROOTDIR', __DIR__);
define('KSLANGDIR', __DIR__ . '/kslang');
define('MINIBUILD', __DIR__ . '/minibuild');
define('KSSELFNAME', 'kickstart_test.php');
define('KSDEBUG', 1);
error_reporting(E_ALL | E_NOTICE | E_DEPRECATED);
ini_set('display_errors', 1);

include_once MINIBUILD . '/minibuild.php';

$minibuild = new AkeebaMinibuild;
$minibuild->minibuild(MINIBUILD . '/kickstart_pro.build', false);
