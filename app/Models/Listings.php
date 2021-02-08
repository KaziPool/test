<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listings extends Model
{
    use HasFactory;
    protected $fillable = [
      'jobID',
      'clientID',
      'amount'
    ];
    public function listings(){
      return $this->belongsTo('App\Models\Job');
  }
}
