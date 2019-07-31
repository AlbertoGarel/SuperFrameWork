<?php
namespace App\controllers;
use App\controllers\Controller;

class NotFoundController extends Controller
{

        public function index()
        {
            $this->viewManager->renderTemplate('404.twig.html');
        }
}