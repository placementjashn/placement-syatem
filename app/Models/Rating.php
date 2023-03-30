<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $primaryKey  = "rating_id";
    public function user(){
        return $this->belongsTo('App\Models\User','id');
    }
    public function company(){
        return $this->belongsTo('App\Models\Company','company_id');
    }
}
