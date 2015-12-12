<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = ['name'];

    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps();
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeDesc($query)
    {
        return $query->orderBy('id', 'DESC');
    }

    public function scopePaginado($query)
    {
        return $query->paginate(5);
    }
}