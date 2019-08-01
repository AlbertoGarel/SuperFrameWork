<?php

namespace App\controllers;
use App\ViewManager;
use App\services\PostService;
use Kint;


class HomeController extends Controller
{
 
    /**
     * @Inject
     * @var PostService
     */
    private $postService;

   
    
       
     public function index()
    {
         $posts = $this->postService->getPosts();
          
           $this->viewManager->renderTemplate("index.twig.html",["posts"=>$posts]);
    }
}
