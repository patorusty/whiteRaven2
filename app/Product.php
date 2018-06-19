<?php

namespace App;

use App\Product;
use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function brands() {
        return $this->belongsTo(SubCategory::Class);
    }

    protected $guarded = [];


}
