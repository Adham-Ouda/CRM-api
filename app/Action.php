<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Action extends Model 
{

    protected $table = 'actions';
    public $timestamps = true;
    protected $fillable = array('type', 'customer_id', 'comment', 'date', 'time', 'next_action');

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}