<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BankDetail extends Model
{
    protected $table = 'bank_details';
    protected $primaryKey ='id';
    protected $fillable = ['users_id','account_title','account_number','bank_name'];
    public $timestamps = false;
}
