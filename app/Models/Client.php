<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'phone',
        'ID',
        'password',
        'secretKey'
    ];


    public function security(){
        return $this->hasOne('App\Models\Security');
    }
    public function paymentToExpert(){
        return $this->hasMany('App\Models\Payment');   
    }
}
