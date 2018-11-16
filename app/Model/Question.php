<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;


// no need to use other models cause they are on the same folder

class Question extends Model
{
    // Question Model Relationships

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function replies(){

        return $this->hasMany(Reply::class);

    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    

}
