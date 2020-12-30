<?php
namespace App\Repositories\Blog;
use App\Repositories\Blog\BlogContract;
use Illuminate\Support\Facades\Storage;
use App\Blog;

class EloquentBlogRepository implements BlogContract {
    public function create($request) {
        $post = new Blog();
        $post->title = $request->title;
        $post->content = $request->content;
        $name_slug = preg_replace('/\s+/', '-', $request->title);
        if ($request->file('news_image')) {
            //
            $name = strtolower($name_slug. '-'.rand());
            $extension = $request->news_image->extension();
            $request->news_image->storeAs('/public', $name.".".$extension);
            $post->image_url = Storage::url($name.".".$extension);
        }        
        $post->slug = strtolower($name_slug. '-'.rand());
        $post->save();
        return $post;
    }

    public function findAll() {
        return Blog::latest()->paginate(20);
    }

    public function findBySlug($slug) {
        return Blog::where('slug', $slug)->first();
    }
}

