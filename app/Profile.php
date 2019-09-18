<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = []; //Add [title] to fillable property to allow mass assignment on [App\Profile].

    public function user(){
        return $this->belongsTo(User::class);  //User::class === 'App\User'
    }
}

