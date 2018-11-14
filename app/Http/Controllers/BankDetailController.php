<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BankDetail;

class BankDetailController extends Controller
{
    public function index()
    {
    	return view('bankdetail.bankdetail');
   }
   public function insertbankdetail(Request $request)
   {
   	 $bankdetail = BankDetail::create($request->all());
  	return back();
   }
}
