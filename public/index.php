<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new \PlatziPHP\Application(
    new \Illuminate\Container\Container()
);

$app->run();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

