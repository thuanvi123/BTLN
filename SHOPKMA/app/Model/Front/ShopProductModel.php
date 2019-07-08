<?php

namespace App\Model\Front;

use Illuminate\Database\Eloquent\Model;

class ShopProductModel extends Model
{
    //
    public $table = 'shop_products';

    public function filter( $table , Request $request){
        if($request->has("price")){
            $table->whereBetween('price',[300000,500000])->get();
        }
        return $table;
    }
}
