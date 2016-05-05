<?php
namespace App\Repositories\User;
//namespace App\Repositories\User\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

use Session;
use DB;
use Request;
use Validator;
use Hash;

class UserRepository implements UserRepositoryInterface {

	public function checkValidLogin($input){
		if(isset($input['do_login'])){
			return true;
		}else{
			return false;
		}
	}

	public function doValidation($input){
		$validator = Validator::make(
			$input,
		    [
		        'password' => 'required|min:5',
		        'email' => 'required|email'
		    ]
		);
		return $validator;
	}

	public function checkValidUser($input){ 
		$user = DB::table('users')
		->where('email',$input['email'])
		->first();

		if($user){
			// if($user->password == md5($input['password'])){
			if (Hash::check($input['password'], $user->password)){
				
				session(['userId'=>$user->id]);
				session(['username'=>$user->firstname]);
				return $user;
			
			}else{
				return 'mismatch';
			}
			
		}else{
			return false;
		}
	}

}

?>