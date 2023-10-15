<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{
    use HasFactory;
protected $table="playlists";
protected $fillable=[
    'name',
    'imgURL',

];

function songs():BelongsToMany
{
    return $this->belongsToMany(Song::class,'song_playlist');
}


}
