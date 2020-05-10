<?php

namespace App;

use App\Product;

class Seller extends User
{
    //un vendedor tiene muchos productos
    public function products(){
        return $this->hasMany(Product::class);
    }
}
