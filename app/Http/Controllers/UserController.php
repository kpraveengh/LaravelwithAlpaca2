<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

use App\Http\Requests;
use App\Post;
use DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();

      /*  $users = User::where('name', $name)->first();*/

        return view('user.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user -> save();
        return redirect('user') -> with('status', 'Post has been Submitted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get the nerd
        $user = User::find($id);
        if(!$user){
            abort(404);
        }

        // show the view and pass the nerd to it
        return View::make('user.show') -> with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         // get the nerd
        $user = User::find($id);

        // show the edit form and pass the nerd
        return View::make('user.edit', compact('user', $user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $user = User::find($id);
        
        $user -> name = $request -> name;
        $user -> email = $request -> email;
        $user ->save();
        return redirect() -> route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $user = User::find($id)
        ->delete();
         return redirect('user') -> with('status', 'Post Successfully Deleted!');
    }
}
