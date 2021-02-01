<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\PasswordBroker;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use Hash;

class PasswordController extends Controller {

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
	 * Create a new password controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\PasswordBroker  $passwords
	 * @return void
	 */
	public function __construct(Guard $auth, PasswordBroker $passwords)
	{
		$this->auth = $auth;
		$this->passwords = $passwords;

		$this->middleware('guest',['except' => array('changePassword')]);
	}

	public function changePassword($id){
		if(Auth::user()->id == $id){
			$data = User::where('id','=',$id)->firstOrFail();
			$data->password = bcrypt(Input::get('new_password'));
			$data->save();
		//	return view('administration.user-profile.index')->with('data', $data);
		  return redirect('/perfil/'.$id)->with('success', 'Clave cambiada exitosamente!');
		}else{
			return view('errors.401');
		}
	}

}
