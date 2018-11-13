<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Amount;
use App\Coupon;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
           'first_name'  => 'required',
        'last_name'  => 'required',
        'username'  => 'required',
        'email'  => 'required',
        'phone'  => 'required',
        'qualification'  => 'required',
        // 'coupon'  => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // dd($data['first_name']);
        // dd($data['coupon']);
        $coupon_object =new Coupon;
        $coupon = $coupon_object->checkCoupon($data['coupon']);
        if($coupon)
        {      
             $user= User::create([
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'phone' => $data['phone'],
                'qualification' => $data['qualification'],
                // 'referral' => $data['referral'],
                'username' => $data['username'],
                'password' => bcrypt($data['password']),
                'email' =>  $data['email'],
                'address' =>  $data['address'],
                'status' =>  '1',
                'role' =>  '2',     
            ]);
            $coupon = $coupon_object->checkCoupon($data['coupon']);
            // $path = storage_path() . "/json/settings.json"; // ie: /var/www/laravel/app/storage/json/filename.json
            // $data = json_decode(file_get_contents($path), true);        
            $amount =new Amount;
            $amount->saveAmount($user->id ,$coupon);
            return $user;
        }
        return back();
        // $amount->
    }
}
