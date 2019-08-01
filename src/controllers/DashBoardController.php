<?php
namespace App\controllers;
use App\controllers\ControllerAuth;
use Kint;

class DashBoardController extends ControllerAuth
{
   
    public function  index(){

       
        $this->viewManager->renderTemplate('dashboard.twig.html',['user'=>$this->user->email]);
    }
}