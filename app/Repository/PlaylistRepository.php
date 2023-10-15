<?php
namespace App\Repository;
use App\Models\Category;
use App\Models\Playlist;
use App\Models\Song_Playlist;
class PlaylistRepository{
function getData(){
try{
    $categories=Category::all();
    return $categories; 
}
catch(\Exception $ex){
    return $ex;
}


    }
    ###########################################################
function addPlaylistData($req,$imageURL){
 
    try
    {
        $playlist=Playlist::create([
        'name'=>$req["name"],
        'imgURL'=>$imageURL
    ]);
}
catch(\Exception $ex){
    return response()->json($ex);
}

   $category=Category::find($req["category_id"]);
   $songs=$category->songs->where('singerName',$req["singerName"]);

   foreach($songs as $song){

   try{
     $song_playlist=Song_Playlist::create([
        'playlist_id'=>$playlist->id,
        'song_id'=>$song->id
    ]);
}
    catch(\Exception $ex){

        return response()->json($ex);
    }
   }

   return $playlist;
    }
    ############################################################################
}