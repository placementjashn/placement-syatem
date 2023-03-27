<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applied extends Model
{
    use HasFactory;
    protected $table = 'applieds';
    protected $primaryKey  = "applied_id";

     public function company(){
        return $this->belongsTo('App\Models\Company','company_id');
    }  
}