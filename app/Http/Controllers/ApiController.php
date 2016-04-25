<?php namespace App\Http\Controllers;

use App\Link;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class ApiController extends Controller {

    public function get_all_links()
    {
        $token = Input::get('token');
        $email = Input::get('email');

        $links = Link::whereHas('user',function($query) use ($token,$email){
                $query->where(['api_token' => $token,'email' => $email]);
            })->with('user')
            ->orderBy('created_at','desc')
            ->get();
        if(!empty($links)){
            return response()->json(['status' => 'success','links' => $links]);
        }else{
            return response()->json(['status' => 'false']);
        }
	}

    public function isLoggedIn()
    {
        $api = Input::get('token');
        $email = Input::get('user');
        $user = User::where(['api_token' => $api,'email' => $email])->count();
       if($user > 0){
           return response()->json(['status' => 'success']);
       }else{
           return response()->json(['status' => 'false']);
       }
    }
}