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
    
    public function index(int $id=null){
        if ($id===null){
            $this->error = null;
            return $this->viewManager->renderTemplate('form-post.twig.html',['user'=>$this->user->email]);
        }
        $post = $this->postService->getPostById($id);
        $this->viewManager->renderTemplate('form-post.twig.html',['post'=>$post,'user'=>$this->user->email]);



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

    public function update(int $id){
        try{

            $post = $this->postService->getPostById($id);
            $post->title = $_POST['title'];
            $post->body=$_POST['body'];
            $this->postService->updatePostById($post);
            $this->redirectTo('paneldecontrol');
        }catch(\Exception $e){
            $this->logManager->error($e->getmMessage());
        }
    }

}