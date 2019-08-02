<?php

namespace App\controllers;

use App\ViewManager;
use App\DoctrineManager;
use App\LogManager;
use App\SessionManager;
use DI\Container;
use Kint;

abstract class Controller
{

    protected $viewManager;
    protected $logManager;
    protected $sessionManager;
    protected $user;

    public function __construct(Container $container, ViewManager $viewManager,LogManager $logManager, SessionManager $sessionManager)
    {
        $this->viewManager = $viewManager;
        $this->logManager= $logManager;
        $this->logManager->info("Controlador ->".get_class($this)." cargado");
        $this->sessionManager = $sessionManager;
        $this->user = $this->sessionManager->get('user');
    }

    public abstract function index();

    public function redirectTo(string $page)
    {
        $host = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/$page");
    }    

}