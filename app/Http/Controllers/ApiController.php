<?php namespace App\Http\Controllers;

use App\Link;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PhpSpec\Exception\Exception;
use \MyHelper as Helper;
use Psy\Exception\ErrorException;
use Illuminate\Validation\Validator;
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

    public function delete($id)
    {
        try{

            $token = Input::get('token');
            $email = Input::get('email');

            $link = Link::whereHas('user',function($query) use ($token,$email){
                $query->where(['api_token' => $token,'email' => $email]);
            })->where('id',$id)->first();

            if($link->delete()){
                return response()->json(['status' => 'success']);
            }else{
                throw new Exception('Link wasn\'t deleted!');
            }
        }catch(Exception $e){
            return response()->json(['status' => 'false','message' => $e->getMessage()]);
        }
    }

    public function addLink(Request $request)
    {

        $link = $request->all();
        $this->validate($request, [
            'link' => 'required|url',
        ]);
        try{
             $linkInform = file_get_html($link['link']);

            $data['link']  = $link['link'];
            $data['user_id']  = $link['id'];
            $data['title'] = $linkInform->find('title',0)->innertext;
            $tags = $linkInform->find('meta[name="keywords"]',0);
            $description = $linkInform->find('meta[name="description"]',0);
            $image = $linkInform->find('meta[property="og:image"]',0);
            $icon = $linkInform->find('link[rel*="shortcut"]',0);
            if(!empty($image)){
                $data['image'] = $image->content;
            }
            if(!empty($icon)){
                $data['icon'] = $icon->href;
            }else{
                $icon = $linkInform->find('link[rel*="icon"]',0);
                if(!empty($icon)){
                    $data['icon'] = $icon->href;
                }
            }
            if(!empty($tags)){
                $data['tags'] = str_limit($tags->content, $limit = 70, $end = '...');
            }elseif(!empty($description)){
                $data['tags'] = $description->content;
            }else{
                $data['tags'] = '';
            }
            $data['url'] = Helper::url($link['link']);
            if(Link::firstOrCreate($data)){
                return response()->json(['status' => 'success']);
            }else{
                throw new Exception('Error');
            }
        }catch(Exception $e){
            return response()->json(['status' => 'false','message' => $e->getMessage()]);
        }
    }
}
