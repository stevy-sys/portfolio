<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;



/**
 * un blog a beacoup de commentaire
 */
class Blog extends Model
{
    protected $guarded = [];
    public function commentaire()
    {
        return $this->hasMany('App\Http\Models\Commentaire');
    }
}
