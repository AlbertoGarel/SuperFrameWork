<?php
namespace App\controllers\auth;
use App\controllers\ControllerAuth;
use App\services\UserService;

class ProfileController extends ControllerAuth
{
    /**
     * @Inject
     * @var UserService
     */
    private $userService;

    public function index(){
       
          $this->viewManager->renderTemplate('profile.twig.html',['user'=>$this->user->email ,'data'=>$this->user]);

    }

}