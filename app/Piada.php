<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piada extends Model
{
    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
