<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use function Pest\Laravel\json;

class PostController extends Controller
{
    use ApiResponseTrait;
   public function index(){
       $posts=PostResource::collection(Post::get());

       return $this->ShowResponse($posts,"ok",200);


   }

  public function show($id){
       $post= Post::find($id);

       if ($post){
           return $this->ShowResponse(new PostResource($post),"ok",200);

       }
           return $this->ShowResponse(null,"The Posts Not Founud",404);






  }
}
