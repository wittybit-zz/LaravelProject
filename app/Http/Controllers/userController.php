<?php


namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function getAllUsers(){
    	$users = User::get();
    	return response($users,200);
    }

    public function createUser(Request $request){
    	$user = new User;
    	$user->name = $request->fname." ".$request->lname;
    	$user->email = $request->email;
    	$user->password = $request->password;
    	$request->validate([
			'lname'=>'required|min:9|max:20'
		]);
    	$user->save();

    	return response()->json([
    		'message'=>'User recorded successfully'
    	],201);
    }

    public function getUser($id){
    	if(User::where('id',$id)->exists()){
    		$user = User::where('id',$id)->get();
    		return response($user,200);
    	}
    	else{
    		return response()->json([
    			'message'=>"User not found"
    		],404);
    	}
    }

    public function verifyUser(Request $request){
    	$request->validate([
    		'email'=>'bail|required|email',
    		'password'=>'bail|required'
    	],[
    		'email.required'=>'Please fill the email'
    	]);
    	if(User::where('email',$request->email)->exists()){
    		$user = User::where('email',$request->email)->where('password',$request->password)->first();
    		if(!$user){
    			return redirect()->route('login', ['userExists' => 'Password Incorrect...'])->withInput();
    		}
    		/*Create session*/
    		$request->session()->put('user',$user);
    		return redirect('home');
    		/*Redirect back to the home page*/
    		//
    	}
    	else{
    		return redirect()->route('login', ['userExists' => 'User not found...'])->withInput();
    	}
    }

    public function updateUser($id,Request $request){
    
    	if(User::where('id',$id)->exists()&&count($request->input())>0){
    		
    		$user = User::find($id);
    		$user->name = is_null($request->name)?$user->name:$request->name;
    		$user->course = is_null($request->course)?$user->course:$request->course;
    		$user->save();
    		return response()->json([
    			'User'=>$user->name,
    			'message'=>"records updated successfully"
    		],200);
    	}
    	else{
    		return response()->json([
    			'message'=>"User not found"
    		],404);
    	}
    }

    public function daleteUser($id){
    	
    }

    public function removeSession(Request $request){
    	$request->session()->forget('user');
    	return redirect('home');
    }
}
