<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dorm extends Model
{
    public function landlord() {
    	return $this->belongsTo(User::class);
    }

    public function specificDormFilter() {
    	$filters = $this->hasMany(SpecificDormFilter::class);
    	return $filters;
    }

    public function getUnverified() {
        return Dorm::all()->where('status', 0);
    }

     public function getVerified() {
        return Dorm::all()->where('status', 1);
    }

    public function getLandlordName() {
        $name = $this->landlord()->first()->first_name; 
        $name .= " " . $this->landlord()->first()->last_name; 
        return $name;
    }

    public function photo() {
        return $this->hasMany(DormPhoto::class);
    }

    public function dormFilter() {
        return $this->belongsToMany(DormFilter::class, 'specific_dorm_filters', "dorm_id", "filter_id");
    }

    public function get() {
        
    }


}
