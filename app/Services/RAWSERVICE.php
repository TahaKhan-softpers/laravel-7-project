<?php

namespace App\Services;



use App\Models\Post;
use App\Repositories\PostRepository;
use Dotenv\Repository\RepositoryBuilder;

class RAWSERVICE
{

    /**
     * @Var commentRepository
     *
     *
     */
    protected $postRepository;
    /**
     *  post Service Constructor
     * @param PostRepository $postRepository
     *
     */
    public function  __construct(PostRepository $postRepository){
         $this->postRepository=$postRepository;
    }
    public function create($data){
        $this->postRepository->create($data);
    }
    public function showind($id){
       return $this->postRepository->showind($id);
    }
    public function edit($id){
        return $this->postRepository->edit($id);
    }
    public function showall(){
        return $this->postRepository->showall();
    }
    public function update($request,$id){
        $this->postRepository->update($request,$id);
    }
    public function delete($id){

        $this->postRepository->delete($id);
    }
}
