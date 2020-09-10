<?php

namespace App\Services;



use App\Repositories\ImageRepository;
use Dotenv\Repository\RepositoryBuilder;

class ImageService
{

    /**
     * @Var imageRepository
     *
     *
     */
    protected $imageRepository;
    /**
     *  Image Service Constructor
     * @param ImageRepository $imageRepository
     *
     */
    public function  __construct(ImageRepository $imageRepository){
         $this->imageRepository=$imageRepository;
    }
    public function create($data){
        $this->imageRepository->create($data->all());
    }
    public function showind($id){
       return $this->imageRepository->showind($id);
    }
    public function edit($id){
        return $this->imageRepository->edit($id);
    }
    public function showall(){
        return $this->imageRepository->showall();
    }
    public function update($request,$id){
        $this->imageRepository->update($request,$id);
    }
    public function delete($id){
        $this->imageRepository->delete($id);
    }
    public function deletefromfolder($id){
        // post id
         return $this->imageRepository->postimage($id);

    }

}
