<?php 
namespace App\Http\Controllers;
use App\Models\User;
use App\Repositories\User\UserRepositoryInterface;
use App\Http\Controllers\Controller;

use Session;
use DB;
use Request;
use Response;
use Validator;

class UserController extends Controller {
	
	public function __construct(UserRepositoryInterface $user, User $usermodel)
    {
        $this->user = $user;
        $this->usermodel = $usermodel;
    }
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

	
	public function login()
	{		
		return view('login');
	}

	public function logout()
	{
		Session::flush();
		return redirect('/');
	}

	public function checkLogin(){ 
		$input = Request::all(); 
		$validLogin = $this->user->checkValidLogin($input);
		
		if($validLogin == false){ 
			return view('login')->with('error','Invalid login');
		}

		$validator = $this->user->doValidation($input);		

		if($validator->fails())
		{
		    return view('login')->with('error','Email and password validation fails');
		
		}else{

			$activeUser = $this->user->checkValidUser($input);

			if($activeUser == false){
				return view('login')->with('error','Invalid User');
			
			}else if($activeUser == 'mismatch'){
				return view('login')->with('error','Wrong credentials');
			
			}else{				
				return redirect('home');
			}
		}
		
	}

	public function getPosts(){
		$posts = get_posts();
		$wpCategories = $this->usermodel->get_categories($count=null); // print_r($wpCategories); exit();
		return view('posts')->with(array('wpPosts'=>$posts, 'categories'=>$wpCategories));
	}

	public function getProducts(){
		$products = DB::table('products')->get();
		return Response::json($products);		
	}

}
