<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'type',
        'jobID'
    ];
    public function paymentForExpert(){
        return $this->hasMany('App\Models\Payment');   
    }
    public function JobListings(){
        return $this->hasMany('App\Models\Payment');   
    }
}
