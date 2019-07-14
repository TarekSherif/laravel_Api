<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\response;
use App\Models\Post;

class PostController extends Controller
{

      /**
     * Show Hello API.
     * http://127.0.0.1:8000/api/hello
     * @return string
     */
    public function hello()
    {
        $Hello="Hello API";
        return response($Hello,200);
    }

    /**
     * Show all ArrayOfPosts.
     * http://127.0.0.1:8000/api/ArrayOfPosts
     * @return json
     */
    public function ArrayOfPosts()
    {
        $posts=[
            [
                "title"=>"post1",
                "body"=>"sdfsdfsadfasdf"
            ],[
                "title"=>"post2",
                "body"=>"sdfsdfsadfasdf"
            ],[
                "title"=>"post3",
                "body"=>"sdfsdfsadfasdf"
            ],[
                "title"=>"post4",
                "body"=>"sdfsdfsadfasdf"
            ],

        ];
        return response($posts,200);
    }

    /**
     * Show all Posts.
     * http://127.0.0.1:8000/api/Posts
     * @return json
     */
    public function index()
    {
        $posts=Post::get();
        return response($posts,200);
    }
        /**
     * Show  Post by id.
     * http://127.0.0.1:8000/api/post/{id}
     * @return json
     */
    public function show($id)
    {
        $post=Post::find($id);
        if($post){
            return response($post,200);
        }
        return response("Not Found this Post",404);
    }


}
