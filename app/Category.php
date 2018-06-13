<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function Products()
    {
        return $this->hasMany(Product::Class);
    }
}
