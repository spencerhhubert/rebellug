<?php

include 'config.php';

set_time_limit(10000);

$compress_images = true;
$resize_images = false;

$tinyify_API_KEY = getenv("tinyify_API_key");
require_once(SITE_ROOT . '/vendor/autoload.php');
\Tinify\setKey($tinyify_API_KEY);

$dir = 'images/groupshots/';
$dirUncompressed = $dir . 'a/';
$images = scandir($dirUncompressed);
$images = array_diff($images, array('.', '..'));

if ($compress_images == true) {
    foreach ($images as $image) {
        $source = \Tinify\fromFile($dirUncompressed.$image);
        $source->toFile($dir.$image);
    }
    echo "Images compressed";
}

if ($resize_images == true) {
    foreach ($images as $image) {
        $source = \Tinify\fromFile($dirUncompressed.$image);
        $resized = $source->resize(array(
            "method" => "scale",
            "width" => 1920
        ));
        $resized->toFile($dir.$image);
    }
    echo "Images resized";
}