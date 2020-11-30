<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    public function menus()
    {
        return $this->belongsToMany('App\AdmMenu');
    }
}
