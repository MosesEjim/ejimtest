<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    public function subCategories() {
        return $this->hasMany('App\Subcategory');
    }
}
