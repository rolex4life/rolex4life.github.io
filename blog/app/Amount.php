<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
     public  function saveAmount($user_id ,$amount)
     {
     	$this->user_id = $user_id;
     	$this->amount= $amount;
     	$this->total= $amount;
     	$this->save();
     	return true;
     }
}
