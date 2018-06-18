<?php

namespace App;

use App\SubCategory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function products() {
        return $this->belongsTo(SubCategory::Class);
    }

    protected $guarded = [];
}
