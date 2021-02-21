<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * un commentaire appartient a un blog
*/
class Commentaire extends Model
{
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }
}
