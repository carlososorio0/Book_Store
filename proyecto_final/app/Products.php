<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'author', 'description', 'extract', 'price', 'image', 'visible', 'category_id'];

    //Relation

    public function category()
    {
     return $this->belongsTo('App\Category');
}

}

