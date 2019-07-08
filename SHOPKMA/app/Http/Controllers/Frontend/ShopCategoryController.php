<?php

namespace App\Http\Controllers\Frontend;
use App\Model\Front\BannerModel;
use App\Model\Front\ShopCategoryModel;
use App\Model\Front\ShopProductModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ShopCategoryController extends Controller
{
    //

    public function detail($id) {

        $data = array();
        $data['banner_main']  =   BannerModel::getBannerByLocation(1);

        $homepage_category = ShopCategoryModel::where('homepage', 1)->orderBy('id', 'asc')->take(4)->get();

        foreach ($homepage_category as $key => $cat) {
            $homepage_category[$key]['products'] = ShopProductModel::where(array('cat_id'=> $cat->id, 'homepage' => 1))->orderBy('id', 'asc')->take(8)->get();
        }

        $data['homepage_category'] = $homepage_category;

        $data['category'] = ShopCategoryModel::find($id);
        $data['products'] = ShopCategoryModel::getProducts($id);


        return view('frontend.shop.category.detail', $data);
    }
    public function getProduct($id, Request $request) {
        $data = array();
        $data['banner_main'] =    BannerModel::getBannerByLocation(1);

        $homepage_category = ShopCategoryModel::where('homepage', 1)->orderBy('id', 'asc')->take(4)->get();

        foreach ($homepage_category as $key => $cat) {
            $homepage_category[$key]['products'] = ShopProductModel::where(array('cat_id'=> $cat->id, 'homepage' => 1))->orderBy('id', 'asc')->take(8)->get();
        }

        $data['homepage_category'] = $homepage_category;

        $data['category'] = ShopCategoryModel::find($id);

        if($request->has("price")){

            $price = $request->query("price");

            if($price == 4){
                $data['products'] = ShopProductModel::where('cat_id',$id)->whereBetween("priceSale",[12000001,20000000])->get();
            }else if($price ==1){
                $data['products'] = ShopProductModel::where('cat_id',$id)->whereBetween("priceSale",[300000,500000])->get();
            }else if($price == 2 ){
                $data['products'] = ShopProductModel::where('cat_id',$id)->whereBetween("priceSale",[500001,700000])->get();
            }else if($price == 3){
                $data['products'] =  ShopProductModel::where('cat_id',$id)->whereBetween("priceSale",[700001,1000000])->get();
            }else
                $data['products'] =  ShopProductModel::where('cat_id',$id)->whereBetween("priceSale",[20000001,50000001])->get();
        }else{
            $data['products'] = ShopCategoryModel::getProducts($id);
        }
         if($request->has("orderby")){
             $orderby = $request->query("orderby");
             if($orderby == "asc"){
                 $data['products'] = ShopProductModel::where('cat_id',$id)->orderBy('priceSale', 'asc')->get();
             }else if($orderby == "desc"){
                 $data['products'] = ShopProductModel::where('cat_id',$id)->orderBy('priceSale', 'desc')->get();
             }else if($orderby == "new_product" ){
                 $data['products'] = ShopProductModel::where('cat_id',$id)->orderBy('updated_at', 'desc')->get();
             }else {
                 $data['products'] = ShopCategoryModel::getProducts($id);
             }
         }




//        echo "<pre>";
//        print_r($orderby);
//        echo "</pre>";
//        die();
        return view('frontend.shop.category.detail',$data);
    }

}
