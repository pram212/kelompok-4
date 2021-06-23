<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Post extends Model
{
    protected $fillable = ['caption', 'quote', 'user_id'];

    public function getCreatedAtAttribute(){

        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l, d F Y, h:i a');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
        ->translatedFormat('l, d F Y, h:i a');    

           // ->diffForHumans(); akan menampilkan ... jam/menit/detik yang lalu
    }


    public function user()
    {
        return $this->belongsTo('\App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('\App\Tag', 'tags');
    }
}
