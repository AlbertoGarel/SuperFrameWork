<?php

namespace App\controllers;
use App\ViewManager;
use App\services\PostService;
use Kint;

class HomeController extends Controller
{
 
    private $postService;

    public function __invoke(PostService $postService)
    {
        $this->postService = $postService;
    }
    
    
       
     public function index()
    {
         
           \Kint::dump($this->postService->getPosts());       
           $this->viewManager->renderTemplate("index.twig.html");
    }
}
