<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\University;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
            'firstName' => 'required|max:30',
            'lastName' => 'required|max:20',
            'university' => 'required|exists:universities,name',
            'email' => 'required|email|max:60|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $uni_id = University::where('name', $data['university'])->first()->id;

        return User::create([
            'firstname' => $data['firstName'],
            'lastname' => $data['lastName'],
            'university_id' => $uni_id,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}
