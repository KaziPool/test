<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'phone',
        'ID',
        'jobCat',
        'password',
        'secretKey'
    ];

    public function ExpertSecurity(){
        return $this->hasOne('App\Models\Security');
    }
    public function payment(){
        return $this->hasMany('App\Models\Payment');   
    }

}
