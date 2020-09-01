<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Blog\BlogContract;
use Sentinel;

class BlogController extends Controller
{
    protected $repo;
    public function __construct(BlogContract $blogContract) {
        $this->repo = $blogContract;
    }
    
    public function index()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $posts = $this->repo->findAll();
        // dd($posts);
        return view('blog.index')->with('posts', $posts);
    }
    
    public function create()
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }
        return view('blog.create');
        
    }
    
    public function store(Request $request)
    {
        if(!Sentinel::check()){
            return redirect()->route('auth.login.get');
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'file' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $post = $this->repo->create($request);
        $notification = array(
            'message' => "Post: $post->title created successfully",
            'alert-type' => 'success'
        );		

        if($post->id) {
            return redirect()->route('admin.news.index')->with($notification);
        } else {
            return back()->withInput()->with('error', 'Could not create Post. Try again!');
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
    }
}
