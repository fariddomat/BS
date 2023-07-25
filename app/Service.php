<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Service extends Model implements TranslatableContract
{
    use Translatable;
    public $translatedAttributes = ['title', 'brief', 'main_title', 'index_name'];

    public function indexItems()
    {
        return $this->hasMany('App\ServiceIndexItem', 'service_id', 'id');
    }

    public function sections()
    {
        return $this->hasMany('App\ServiceSection', 'service_id', 'id');
    }

    public function workWays()
    {
        return $this->hasMany('App\ServiceWorkWay', 'service_id', 'id');
    }

    public function questions()
    {
        return $this->hasMany('App\ServiceQuestion', 'service_id', 'id');
    }

    public function sliderImages()
    {
        return $this->hasMany('App\ServiceSliderImage', 'service_id', 'id');
    }
    public function sliderHeaderImages()
    {
        return $this->hasMany('App\ServiceHeaderSliderImage', 'service_id', 'id');
    }
}
