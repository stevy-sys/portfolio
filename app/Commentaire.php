<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * un commentaire appartient a un blog
*/
class Commentaire extends Model
{
    protected $fillable = ['content','blog_id','user_id'];
    
    public function blog()
    {
        return $this->belongsTo('App\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
