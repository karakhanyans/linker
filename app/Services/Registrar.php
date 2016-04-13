<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;
use Illuminate\Support\Facades\Mail;
class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'lastname' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		if(isset($data['facebook']) && $data['facebook'] == true){
			$user = User::where('email',$data['email'])->first();
			if(count($user) > 0){
				return $user;
			}
		}
		Mail::send('emails.welcome', $data, function($message) use ($data)
		{
			$message->subject("Welcome to Linker");
			$message->to($data['email']);
		});

		return User::create([
			'name' => $data['name'],
			'lastname' => $data['lastname'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
