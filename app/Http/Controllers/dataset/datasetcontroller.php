<?php

namespace App\Http\Controllers\dataset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Playlist;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\URL;

class datasetcontroller extends Controller
{
    /* */
function addSongPage(){

    return view('dataset.addSong');
}



    function addNewSong(Request $req){
        $image=$req->file('logo');
        $audio=$req->file('sound');

       $logoURL= uploadFileToFireBase($image,'logos');
       $audioURL=uploadFileToFireBase($audio,'audios');

       $playlist=PlayList::create([
        'name'=>$req->name,
        'singerName'=>$req->singerName,
        'logoURL'=>$logoURL,
        'soundURL'=>$audioURL,
        'album_id'=>$req->album_id
       ]);
       /* return response()->json([
        'status'=>200,
        'data'=>$playlist,
        'success'=>true
       ]); */

    return back()->with('palylist',$playlist);
    }
}
