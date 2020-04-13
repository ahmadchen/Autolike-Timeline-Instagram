<?php
/* 
 * Pace Usa Offical Bot © 2013 Made This
 *
 * developerpaceusa@gmail.com - 
 *
 */
@ini_set('memory_limit', '-1');
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
@ini_set('max_execution_time',0);
@set_time_limit(0);
@ignore_user_abort(1);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
header("Content-Type: text/plain");

$Pace=array(
	'ig' => array(
		/*
			SILAHKAN CING DI MASUKIN PELAN PELAN :V
		*/
		'', // USERNAME instagram lu
		'', // PASSWORD instagram lu
		/* JANGAN DI EDIT.. !!! */
		'https://i.instagram.com/api/v1/', 'Instagram 9.0.1 Android (18/4.3; 320dpi; 720x1280; Xiaomi; HM 1SW; armani; qcom; en_US)', '96724bcbd4fb3e608074e185f2d4f119156fcca061692a4a1db1c7bf142d3e22'
	),
	'config' => array(
		true,	// Like Beranda Aktif

		'data/',
		'data/igerror.log'
	)
);

if(!file_exists( $Pace['config'][5] )) {
	mkdir($Pace['config'][5].'/' , 0777);
}
