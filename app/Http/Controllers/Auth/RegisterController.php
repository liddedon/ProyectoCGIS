<?php

namespace App\Http\Controllers\Auth;

use App\Cliente;
use App\Entrenadorpersonal;
use App\User;
use App\Http\Controllers\Controller;
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

/*    public function showRegistrationForm()
    {
        return view('auth.register');

    }*/

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
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'especialidad' => 'nullable|max:255',
            'haceDeporte' => 'nullable|boolean',
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
        $user=User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if(isset($data['especialidad'])){
            $entrenadorpersonal = new Entrenadorpersonal($data);
            $entrenadorpersonal->user_id=$user->id;
            $entrenadorpersonal->save();
        }elseif(isset($data['haceDeporte'])){
            $cliente = new Cliente($data);
            $cliente->user_id=$user->id;
            $cliente->save();
        }
     return $user;
    }


}
