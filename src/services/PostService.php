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

    public function deletePostById(int $idPost)
    {
        $post = $this->doctrineManager->em->getRepository(Post::class)->find($idPost);
        if(!$post){
            $this->logManager->info("No existe el post");
        }
        $this->doctrineManager->em->remove($post);
        return $this->doctrineManager->em->flush();
    }

    public function getPostById(int $id):Post
    {
        $repository = $this->doctrineManager->em->getRepository(Post::class);
        return $repository->find($id);
    }

    public function updatePostById(Post $post):Post
    {
        $this->doctrineManager->em->merge($post);
        $this->doctrineManager->em->flush();
        return $post;
    }
}