<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Cookie\CookieJar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;
		$this->redirectTo = 'list';
		$this->middleware('guest', ['except' => 'getLogout']);
	}
	public function login(Request $request)
	{
		return view('auth.login');
	}
	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->redirect();
	}
	public function handleProviderCallback()
	{
		$user = Socialite::driver('facebook')->user();

		$name = explode(' ',$user->getName());
		$data['name'] = $name[0];
		$data['lastname'] = $name[1];
		$data['email'] = $user->getEmail();
		$data['password'] = str_random(8);
		$data['facebook'] = true;
		$this->auth->login($this->registrar->create($data));

		return redirect($this->redirectTo);

		// $user->token;
	}

}
