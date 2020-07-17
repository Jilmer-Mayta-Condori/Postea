<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\User;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function MyAccount()
    {
        $id = Auth::id();
        return view('posts.account', ['usuario' => User::find($id)]);
    }

    public function editar()
    {
        $id = Auth::id();
        return view('posts.EditarCuenta', ['usuario' => User::find($id)]);
    }

    public function GuardarCambios(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $nombre = $request->get('name');
        $email = $request->get('email');
        $contraseña = $request->get('password');
        $fecha = Carbon::now();

        $id = Auth::id();
        $post = User::find($id);

        $post->name = $nombre;
        $post->email = $email;
        $post->password = Hash::make($contraseña);
        $post->updated_at = $fecha;
        $post->save();
        
        return redirect('MyAccount');
    }

    public function delete()
    {
        $id=Auth::id();
        $usu = User::find($id);
        $publicaciones = Post::where('user_id','=',$id);
        $usu->delete();
        $publicaciones->delete();
        return redirect('/');
    }
}
