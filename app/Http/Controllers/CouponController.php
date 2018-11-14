<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
class CouponController extends Controller
{
	public function addCouponPage()
	{
		return view('coupons.addCoupon');
	}
 	public function save_coupon(Request $request)
    {

    	for ($i =0; $i < count($request->number) ; $i++) { 
    		$coupon =new Coupon;
    		$coupon->title= $request->title;
    		$coupon->status = 0;
    		$coupon->expiry = $request->expiry;
    		$coupon->price = $request->price;
    		$coupon->number =$request->number[$i];
    		$coupon->save();
    		
    	}
        return back();
    }
    public function viewAddCoupon()
    {
      $coupon = new Coupon;
      $coupons= $coupon->fetech_coupon();
      return view('coupons.manageCoupon' ,compact('coupons'));
      
    }
    public function showCoupon()
    {
    	$coupon = new Coupon;
    	$coupon->fetech_coupon();
    	return back();
    }
}
