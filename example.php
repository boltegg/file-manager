<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//include whois class
include(__DIR__ . '\src\FileManager.php');
$fileManager = new \FileManager();

$path = '/home/username/somedir/file.txt';
// or
// $path = 'C:\hello\test.txt';
$content = 'blablabla';

$result = $fileManager->write($path, $content);

var_dump($result);