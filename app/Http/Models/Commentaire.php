<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * un commentaire appartient a un blog
*/
class Commentaire extends Model
{
    protected $fillable = ['content','blog_id','user_id'];
    
    public function blog()
    {
        return $this->belongsTo('App\Http\Models\Blog');
    }

    public function user()
    {
        return $this->belongsTo('App\Http\Models\User');
    }
}
