<?php
namespace App\Services;
use App\Repository\PlaylistRepository;
use App\Models\Category;
class playlistService{
protected $playlistRepository;

function __construct(PlaylistRepository $playlistRepo){
$this->playlistRepository=$playlistRepo;
}
function getAllCategories(){
   
    $categories=$this->playlistRepository->getData();
     return $categories;
}


function addNewPlaylist($req){
    $image=$req->file('image');
    $imageURL=uploadFileToFireBase($image,'image');
    $playlist=$this->playlistRepository->addPlaylistData($req->all(),$imageURL);
    return $playlist;

}
}