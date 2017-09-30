<?php namespace Cinema\Http\Controllers;

use Cinema\Http\Requests;
use Cinema\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Cinema\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $users = User::all();
		return view('usuario.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{

		return view('usuario.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $Request)
	{

		User::create([
			'name'     => $Request->input('name'), 
			'email'	   => $Request->input('email'),
			'password' => $Request->input('password')
		]);
        Session::flash('mensaje','Usuario creado');
		return redirect::to('\usuario');
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
		$user = User::find($id);
        return view('usuario.edit')->with(compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('mensaje','Usuario actualizado');
        return redirect::to('\usuario');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
        Session::flash('mensaje','Usuario eliminado');
        return redirect::to('\usuario');
	}

}
