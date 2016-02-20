<?php namespace App\Http\Controllers;
use App\Link;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Parser\simply_html_dom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LinksController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function get_all_links()
	{
		$links = Link::where('user_id',Auth::user()->id)
			->with('user')
			->orderBy('created_at','desc')
			->get();
		return $links;
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$link = $request->all();
		$linkInform = file_get_html($link['link']);

		$data['link']  = $link['link'];
		$data['user_id']  = $request->user()->id;
		$data['title'] = $linkInform->find('title',0)->innertext;
		$tags = $linkInform->find('meta[name="keywords"]',0);
		$description = $linkInform->find('meta[name="description"]',0);
		if(!empty($tags)){
			$data['tags'] = $tags->content;
		}elseif(!empty($description)){
			$data['tags'] = $description->content;
		}else{
			$data['tags'] = '';
		}

		if(Link::firstOrCreate($data)){
			echo 'true';
		}else{
			echo 'false';
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$link = Link::find($id);

		if($link->delete()){
			echo 'true';
		}else{
			echo 'false';
		}
	}

}
