<?php

namespace App;

use App\Brand;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function brand() {
        return $this->belongsTo(Brand::Class);
    }

    protected $guarded = [];


}
