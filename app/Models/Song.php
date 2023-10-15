<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Song extends Model
{
    use HasFactory;
    protected $table='songs';
    protected $fillable=[
        'name',
        'category_id',
        'singerName',
        'album_id',
        'imgURL',
        'audioURL',
        'viewerNumber'
    ];


    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    function playlists():BelongsToMany
    {
    return $this->belongsToMany(Playlist::class,'song_playlist');
    }

}
