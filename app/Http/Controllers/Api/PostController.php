<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\response;

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
     * Show all posts.
     * http://127.0.0.1:8000/api/hello
     * @return json
     */
    public function index()
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
}
