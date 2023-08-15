<?php
// Chama o autoload do composer
require './vendor/autoload.php';
// Instancia a classe e chama o controller
$url = new Core\ConfigController();
$url->loadPage();
