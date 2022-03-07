<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'description', 'author','type'];

    public $timestamps = false;

    public function products()
    {
     return $this->hasMany('App\Product');
}

}

