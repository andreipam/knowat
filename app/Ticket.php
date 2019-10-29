<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    //
    public $fillabele=['title','user_id','content','exfile','type','state'];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
