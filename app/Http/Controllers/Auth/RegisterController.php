<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'name' => ['required', 'string', 'max:255','unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'razon_social' => ['required', 'string'],
            'persona_fisica' => ['required', 'string'],
            'calle' => ['required', 'string'],
            'no_ext' => ['required', 'string'],
            'cp' => ['required', 'string'],
            'colonia' => ['required', 'string'],
            'telefono' => ['required', 'string']
            
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'rfc' => $data['password'],
            'razon_social' => $data['razon_social'],
            'persona_fisica' => $data['persona_fisica'],
            'calle' => $data['calle'],
            'no_ext' => $data['no_ext'],
            'cp' => $data['cp'],
            'colonia' => $data['colonia'],
            'entidad_federativa' => 'Jalisco',
            'telefono' => $data['telefono'],
            'rol_fk' => 1,
        ]);
    }
}
