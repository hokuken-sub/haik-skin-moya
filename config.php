<?php
$config = array(
	'name' => 'moya',
	'version' => '1.0.0',
	'thumbnail' => 'img/thumbnail.png',
	'style_file' => 'css/docs.css',
	'templates' => array(
		'top' => array(
			'filename' => 'top.skin.php',
			'layouts' => array('SiteNavigator', 'SiteFooter'),
			'thumbnail' => 'img/thumbnail.top.png',
		),
		'fit' => array(
			'filename' => 'fit.skin.php',
			'layouts' => array('SiteNavigator', 'SiteFooter'),
			'thumbnail' => 'img/thumbnail.fit.png',
		),
	),
	'default_template' => 'top',
	'colors' => array(
		'black'        => 'css/color.black.css',
		'green'        => 'css/color.green.css',
	),
	'textures' => array(
		'cloth'         => 'css/texture.cloth.css',
		'dust'          => 'css/texture.dust.css',
		'project_paper' => 'css/texture.project_paper.css',
		'square'        => 'css/texture.square.css',
	),
	'sample_style_file' => 'css/samples.css',
);
