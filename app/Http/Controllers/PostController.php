<?php
namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

use App\Post;
use App\User;
use View;
use DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::all();
   /*     $user= Auth::User();
        $posts = $user->posts;*/

        /* Pagination */
        $posts = DB::table('posts') -> paginate(2);

         return view('post.index')
        -> with('posts', $posts);
     /*   -> with('user', $user);*/
        /*return view('post.index',['posts' => $posts]);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       return view('post.create');
     /*   $user = User::create([
        Input::get('name'),
    ]);
*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new Post;
        $post -> user_id = Auth::User();
        $post -> title = $request -> title;
        $post -> post_body = $request -> post_body;

        /* Auth User */
         $user = Auth::user();
        $user->posts()->create($post);


        $post -> save();



        return redirect('post') -> with('status', 'Post has been Submitted!');
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
        $post = Post::find($id);
        if(!$post){
            abort(404);
        }

        // show the view and pass the nerd to it
        return View::make('post.show') -> with('post', $post);
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
        $post = Post::find($id);

        // get the User
        $user=Auth::user();
        $posts= $user->posts()->find($id); 


        // show the edit form and pass the nerd
        return View::make('post.edit', compact('post', $post));
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
         $post = Post::find($id);
         $user=Auth::user();
         $posts=$user ->post()->find($id);
        
        $post -> title = $request -> title;
        $post -> post_body = $request -> post_body;
        $post ->save();
        return redirect() -> route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id)
       
        ->delete();
         return redirect('post') -> with('status', 'Post Successfully Deleted!');
    }
}
