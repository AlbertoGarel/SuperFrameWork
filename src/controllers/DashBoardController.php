<?php
namespace App\controllers;
use App\controllers\ControllerAuth;
use App\db\entities\Post;
use App\services\PostService;
use Kint;

class DashBoardController extends ControllerAuth
{

    /**
     * @Inject
     * @var PostService
     */
    private $postService;

    
    public function create(){
        
        $post = new Post();
        $post->title= $_POST['title'];
        $post->body=$_POST['body]'];
        $post->idUser= $this->user->id;
        $result= $postService->createPost($post);
        if ($result== null) die("error");
        $this->redirectTo('paneldecontrol');

    }



    public function  index(){
        $this->viewManager->renderTemplate('dashboard.twig.html',['user'=>$this->user->email]);
    }
}