<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //categories which the product has (many-to-many relationship)
    public function categories()
    {
        return $this->belongsToMany("App\Category","category_product","product_id","category_id");
    }

    //format price function
    public function presentPrice()
    {
        return '$ '.$this->price / 100;
    }

    //for use in Migth-also-like view section
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(4);
    }

    //Defines the "visible/not visible" icon on Product Manager view
    public function visible()
    {
        if (($this->active) === 0){
            return 'fa fa-eye-slash text-danger';
        }else{
            return 'fa fa-eye text-success';
        }
    }

}
