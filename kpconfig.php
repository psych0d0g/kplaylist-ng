<?php

// this is a kpconfig meant for the "kPlaylist 1.8 bundle edition"

$cfg['enablegetid3'] = 1;

$cfg['getid3include'] = 'getid3/getid3/getid3.php';

$cfg['livestreamajax'] = true;

// JW: edit this to suit your setup
$cfg['jw_urls'] = 
array(
	'swf'	=> 'mediaplayer-3-16/mediaplayer.swf',
	'js'	=> 'mediaplayer-3-16/swfobject.js'
);

// enable jw player? Make sure the URLs above works.
$cfg['jw_enable'] = true;

$bundleconfig = array(
	'shoutbox' => 1,
	'ajaxurl' => 'prototype-1.6.0.2.js'
);


?>
