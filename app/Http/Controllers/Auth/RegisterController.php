<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Helper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    protected $redirectTo = RouteServiceProvider::HOME;
    // protected $redirectTo = app()->getLocale().'/user';
    // protected function authenticated(Request $request, $user)
    // {
    //     if ($user->hasRole('superadministrator')) {
    //         return redirect(app()->getLocale().'/admin');
    //     }

    //     if ($user->hasRole('user')) {
    //         return redirect(app()->getLocale().'/user');
    //     }
    //     return redirect(app()->getLocale().'/hhoommee');

    // }

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
            'firstName' => ['required', 'string','min:2', 'max:255'],
            'fatherName' => ['required', 'string','min:2', 'max:255'],
            'grandFatherName' => ['required', 'string','min:2', 'max:255'],
            'sex' => ['required', 'string','min:4','max:6'],
            'age' => ['required', 'numeric','min:1', 'max:150'],
            'phone' => ['required', 'string', 'max:15', 'min:10'],
            'maritalStatus' => ['required', 'string', 'max:7', 'min:3'],
            'religion' => ['required', 'string', 'min:8', 'max:15'],
            'church' => ['required', 'string', 'min:2','max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'max:40', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $userid = Helper::IDGenerator(new user, 'user_id', 6, 'LME');
        $user = User::create([
            'user_id'=> $userid,
            'firstName' => $data['firstName'],
            'fatherName' => $data['fatherName'],
            'grandFatherName' => $data['grandFatherName'],
            'sex' => $data['sex'] ,
            'age' => $data['age'] ,
            'phone' => $data['phone'],
            'maritalStatus' => $data['maritalStatus'],
            'religion' => $data['religion'],
            'church' => $data['church'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        $user->attachRole('user');
        // dd($user);
        return $user;
    }
}
