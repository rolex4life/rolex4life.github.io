<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
	protected $table = 'coupons';
	protected $primaryKey = 'id';
	protected $fillable = ['title','expiry','number','status','price'];
	public $timestamps = false;

	public function fetech_coupon()
    {

		$coupon = Coupon::all();
		return $coupon;
    }

    public function checkCoupon($data)
    {
    	$coupon =Coupon::where('number',$data)->where('status',0)->first();
    	if(!empty($coupon))
    	{
    		$coupon->status= 1;
    		$coupon->update();
    		return $coupon->price;
    	}
    	return false;
    }
}
