<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model 
{

    protected $table = 'customers';
    public $timestamps = true;
    protected $fillable = array('name', 'type', 'phone', 'email', 'address', 'website');

    public function actions()
    {
        return $this->hasMany('App\Action');
    }

}