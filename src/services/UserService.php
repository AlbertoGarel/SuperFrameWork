<?php
namespace App\services;
use App\db\entities\User;

class UserService extends Service
{

    public function findUserByEmail(string $email)
    {
        try{
            $repository = $this->doctrineManager->em->getRepository(User::class);
            $user = $repository->findByEmail($email);
            if (sizeOf($user)==0) return null;
            return $user[0];
        }catch(Exception $e){
            $this->logManager->error($e.toString());
        }
        return null;
    }

    public function createUser(User $user):User
    {
        try{
            $this->doctrineManager->em->persist($user);
            $this->doctrineManager->em->flush();
            return $user;
        }catch(Exception $e){
            $this->logManager->error($e.toString());
        }
        return null;
    }

}