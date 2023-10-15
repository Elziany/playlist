<?php

namespace App\Http\Controllers\Playlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\PlaylistService;
use App\Http\Requests\PlaylistRequest;

class PlaylistController extends Controller
{
    public $playlistService;
    function __construct(PlaylistService  $playlistService){
        $this->playlistService=$playlistService;
    }
function addPlaylistPage(){
    $categories=$this->playlistService->getAllCategories();
    return view('playlist.createPlaylist',compact('categories'));
}

##########################################################################################3

function addPlaylist(PlaylistRequest $req){
$playlist=$this->playlistService->addNewPlaylist($req);
   return back();

}
##########################################3
function testAPI($id){
   $playlist=Song::where('id',$id)->first();

dd($playlist->playlists);


}
}
