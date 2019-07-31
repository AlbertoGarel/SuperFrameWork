<?php
namespace App\controllers\auth;

use App\controllers\Controller;
use App\db\entities\User;
use Kint;
class LoginController extends Controller
{

    private $error;

    public function index(){
        $this->error = null;
        $this->viewManager->renderTemplate('login.twig.html');
    }

    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        \Kint::dump($email, $password);
        $repository = $this->doctrineManager->em->getRepository(User::class);
        $user = $repository->findByEmail($email);
        \Kint::dump($user);
        if(!$user) {
            $this->error= "No existe usuario";
            $this->viewManager->renderTemplate('login.twig.html',['error'=>$this->error]);
        }
            echo $user->email;

    }
}
