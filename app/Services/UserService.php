<?php

namespace App\Services;



use App\Repositories\UserRepository;
use Dotenv\Repository\RepositoryBuilder;

class UserService
{

    /**
     * @Var userRepository
     *
     *
     */
    protected $userRepository;
    /**
     *  User Service Constructor
     * @param UserRepository $userRepository
     *
     */
    public function  __construct(UserRepository $userRepository){
         $this->userRepository=$userRepository;
    }
    public function create($data){
        $this->userRepository->create($data);
    }
    public function showind($id){
       return $this->userRepository->showind($id);
    }
    public function edit($id){
        return $this->userRepository->edit($id);
    }
    public function showall(){
        return $this->userRepository->showall();
    }
    public function update($request,$id){
        $this->userRepository->update($request,$id);
    }
    public function delete($id){
        $this->userRepository->delete($id);
    }
}
