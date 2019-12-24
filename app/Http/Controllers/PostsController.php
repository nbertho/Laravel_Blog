<?php
      namespace App\Http\Controllers;
      use App\Http\Models\Post as PostsMdl;
      use Illuminate\Support\Facades\View;

      class PostsController extends Controller {
          public function show($id){
            $post = PostsMdl::find($id);
            return View::make('posts.show',compact('post'));
          }

      }
