<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = [
        'url',
        'users_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
