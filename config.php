<?php
require_once('Facebook/autoload.php');
$FBObject = new \Facebook\Facebook([
	'app_id' => '1495579417262834',
	'app_secret' => '9ff9d8b8d2cce35527310584f2066e22',
	'default_graph_version' => 'v2.10'
]);
$handler = $FBObject -> getRedirectLoginHelper();
?>