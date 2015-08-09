<?php namespace lara5\Http\Controllers;

use lara5\Http\Requests;
use lara5\Http\Controllers\Controller;
use lara5\Http\Requests\AddSettingsFormRequest;
use Illuminate\Http\Request;
use lara5\Settings;
use ValidatesRequests;
use Illuminate\Validation\Validator;

class SettingsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $settings = Settings::all();
        return view('settings.index')->with('settings',$settings);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('settings.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request,AddSettingsFormRequest $request)
	{
        $name    = $request->input('name');
        $email   = $request->input('email');


//        if($v->fails()){
//            return redirect()->back()->withErrors($v->errors());
//        }
        $setting = new Settings();
        $setting->key = $name;
        $setting->value = $email;
        $setting->save();
        return Redirect('settings/index')->with('message','Setting saved successfully');
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
		//
	}

}
