<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song_Playlist extends Model
{
    use HasFactory;
    protected $table='song_playlist';
    protected $fillable=[
        'song_id',
        'playlist_id'
    ];

    function songs(){
        return $this->belongsTo(Song::class,'song_id');
    }

    function playlist(){
        return $this->belongsTo(Playlist::class,'playlist_id');
    }
}
