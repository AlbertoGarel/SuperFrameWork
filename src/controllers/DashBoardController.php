<?php
namespace App\controllers;
use App\controllers\ControllerAuth;
use Kint;

class DashBoardController extends ControllerAuth
{
   
    public function  index(){

        Kint::dump($this->user);
        $this->viewManager->renderTemplate('dashboard.twig.html',['user'=>$this->user->email]);
    }
}