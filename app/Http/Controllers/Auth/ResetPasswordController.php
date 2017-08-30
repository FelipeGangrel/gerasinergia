<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
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
    * @param Usuario $usuario
    * @param string $password
    * @return void
    */
   protected function resetPassword($usuario, $password)
   {   
       $usuario->setPassword(bcrypt($password));
       $usuario->setRememberToken(STR::random(60));

       \EntityManager::persist($usuario);
       \EntityManager::flush();

       $this->guard()->login($usuario);
   }
}
