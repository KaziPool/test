<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
        'score',
        'timestamp',
        'paymentID'
    ];

    public function ExpertPayment(){
        return $this->belongsTo('App\Models\Expert');
    }
    public function ClientPayment(){
        return $this->belongsTo('App\Models\Client');
    }
    public function JobPayment(){
        return $this->belongsTo('App\Models\Job');
    }
}
