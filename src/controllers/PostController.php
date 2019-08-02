<?php
namespace App\controllers;
use App\services\PostService;
use App\db\entities\Post;

class PostController extends ControllerAuth
{

    /**
     * @Inject
     * @var PostService
     */
    private $postService;
    private $error;
    
    public function index(){
        $this->error = null;
        $this->viewManager->renderTemplate('form-post.twig.html',['user'=>$this->user->email]);
    }

    public function create(){
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->idUser = $this->user->id;
        $result = $this->postService->createPost($post);
        if(!$result) return $this->viewManager->renderTemplate("post-form.twig.html",['user'=>$this->user->email, "error"=>"Error al guardar"]); 
        $this->redirectTo('paneldecontrol');
    }

    public function delete(int $id){
      
        try{
            $this->postService->deletePostById($id);
            $this->redirectTo('paneldecontrol');
        }catch(\Exception $e)
        {
            $this->logManager->error($e->getMessage());
            $this->redirectTo('paneldecontrol');

        }
    }

}