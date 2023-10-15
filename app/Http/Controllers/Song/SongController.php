<?php

namespace App\Http\Controllers\Song;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Song;

class SongController extends Controller
{
    //
    function addSongPage(){
        $categories=Category::get();
        return view('song.createSong',compact('categories'));
    }
    ##########################
    function addNewSong(Request $req){
        $req->validate([
            'name'=>'required|string',
            'singerName'=>'required|string',
            'image'=>'required|file',
            'audio'=>'required|file',
            'category_id'=>'required'
        ]);
        $image=$req->file('image');
        $audio=$req->file('audio');

        $imageURL=uploadFileToFireBase($image,'image');
        $audioURL=uploadFileToFireBase( $audio,'audio');

        try{

            Song::Create([
                'name'=>$req->name,
                'singerName'=>$req->singerName,
                'category_id'=>$req->category_id,
                'imgURL'=>$imageURL,
                'audioURL'=>$audioURL
            ]);

            return back();
        }
        catch(\Exception $ex){
            return response()->json($ex);
        }
    }
}
