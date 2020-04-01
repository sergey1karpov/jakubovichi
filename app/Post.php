<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use User;

class Post extends Model
{
    public function user() {
        return $this->hasMany(User::class);
    }
}
