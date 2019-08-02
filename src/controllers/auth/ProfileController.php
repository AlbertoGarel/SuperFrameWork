<?php
namespace App\controllers\auth;
use App\controllers\ControllerAuth;
use App\services\UserService;
use App\services\PostService;

class ProfileController extends ControllerAuth
{
    /**
     * @Inject
     * @var UserService
     */
    private $userService;

    /**
     * @Inject
     * @var PostService
     */
    private $postService;

    public function index(){

       
       
          $this->viewManager->renderTemplate('profile.twig.html',['user'=>$this->user->email ,'data'=>$this->user,'countpost'=>$this->postService->getCountAllPost($this->user->id),
          'lastpost'=>$this->postService->getLimitPostOrderDesc($this->user->id)]);

    }

}