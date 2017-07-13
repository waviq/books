<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except'=>'getLogout']);
    }

    public function getLogin(){
        return view('Login.index');
    }
    public function postLogin(Request $request)
    {
        return $this->login($request);
    }

    public function getLogout(){
        return $this->logout();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    private function login(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->emailOrUsername,
            'password' => $request->password
        ])
        ) {
            alert()->success('Succes Login');
            return redirect(url(action('HomeController@index')));
        } elseif (Auth::attempt([
            'username' => $request->emailOrUsername,
            'password' => $request->password
        ])
        ) {
            alert()->success('Succes Login');
            return redirect(url(action('HomeController@index')));
        } else {
            alert()->error('Check your user/password');
            return redirect(url(action('LoginController@getLogin')));
        }
    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    private function logout()
    {
        Auth::logout();
        alert()->success('Succes Logout');
        return redirect(url(action('LoginController@getLogin')));
    }

}
