<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class BannerModel extends Model
{
    //
    public $table = 'banners';


    public static function getBannerLocations() {

        $locations = array();
        $locations[1] = 'Main banner';
        $locations[2] = 'laptop';
        $locations[3] = 'Camera';
        $locations[4] = 'PKlaptop';
        $locations[5] = 'PKcamera';

        return $locations;
    }
}
