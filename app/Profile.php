<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=['namalengkap', 'foto', 'umur', 'alamat', 'kelurahan', 'kecamatan', 'kota', 'kelamin', 'hobi', 'bio', 'users_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
