<?php
namespace App\services;
use App\db\entities\Post;

class PostService extends Service
{

    public function getPosts():Array
    {
        $repository = $this->doctrineManager->em->getRepository(Post::class);
        return $repository->findAll();
    }

    public function createPost(Post $post):Post
    {
        try{
            $this->doctrineManager->em->persist($post);
            $this->doctrineManager->em->flush();
            return $post;
        }catch (Exception $e){
            $this->logManager->error($e.toString());
        }
        return null;        
    }

    public function getPostByUser(int $idUser):Array
    {
        $repository = $this->doctrineManager->em->getRepository(Post::class);
        return $repository->findByIdUser($idUser);
    }

}