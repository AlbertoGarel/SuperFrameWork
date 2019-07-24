<?php
namespace App;

class Kernel
{
    public function __construct(){
       $logManager = new LogManager();
       $logManager->info("Arrancando la aplicación");
       $viewManager = new ViewManager();
       $viewManager->renderTemplate("index.twig.html");
    }
}