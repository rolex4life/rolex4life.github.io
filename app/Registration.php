<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'users';
    protected $primaryKey ='id';
    protected $fillable = ['first_name','last_name','phone','qualification','referral','username','email','address','status','role'];
    public $timestamp = true;
}
