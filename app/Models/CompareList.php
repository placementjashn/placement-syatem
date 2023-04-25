<?php


namespace App\Models;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Company;
use App\Models\User;

class CompareList extends Authenticatable
{
    use HasFactory;
    protected $table = 'compare_lists';
    /* protected $primaryKey  = "compare_id"; */
    protected $guarded =[];

    public function company(){
      return $this->belongsTo('App\Models\Company','company_id');
  }

  public function user(){
   return $this->belongsTo('App\Models\User','id');
}  /* 
     public function user()
     {
        return $this->belongsTo(User::class,'id');
     }
     A
     public function company()
     {
        return $this->belongsTo(Company::class,'company_id');
     } */
/* 
     public function totalCompany($id)
     {
        return Company::where('company_id',$id)->count();
     }
    protected $hidden = [
        'password',
        'remember_token',
    ];
    use HasFactory;
     */
}