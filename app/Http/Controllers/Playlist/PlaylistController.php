<?php

namespace App\Http\Controllers\Playlist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
     /* get all play lists*/
     function getAllPlaylists(){
        $playlists=Playlist::get()->all();
        $reposnse=[
            'success'=>true,
            'data'=>$playlists,
            'status'=>200
        ];
        return response()->json($reposnse);
    }

    /*get top 100  viewed playlists  */
    function getTopTen(){
        $playlists=Playlist::take(100)->orderBy('viewerNumber','desc')->get();
        $reposnse=[
            'success'=>true,
            'data'=>$playlists,
            'status'=>200
        ];
        return response()->json($reposnse);

    }
}
