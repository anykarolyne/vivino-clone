<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
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

    protected $redirectTo   = '/';
    

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {    
        $this->middleware('guest');
    }

    public function getReset($token = null)
    {
        $email = DB::table('password_resets')->where('token', $token)->value('email');
        
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }

        return view('auth.reset')->with(compact('token', 'email'));
    }

    protected function getEmailSubject()
    {
        return property_exists($this, 'subject') ? $this->subject : 'Email de Alteração de senha';
    }

    
}
