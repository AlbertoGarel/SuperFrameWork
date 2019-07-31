<?php

namespace App\controllers;

use App\ViewManager;
use App\DoctrineManager;
use Kint;

abstract class Controller
{

    protected $viewManager;
    protected $doctrineManager;

    public function __construct(ViewManager $viewManager, DoctrineManager $doctrineManager)
    {
        $this->viewManager = $viewManager;
        $this->doctrineManager= $doctrineManager;
    }

    public abstract function index();

    public function redirectTo(string $page)
    {
        $host = $_SERVER['HTTP_HOST'];
        header("Location: http://$host/$page");
    }    

}