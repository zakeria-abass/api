<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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


  public function store(Request $request){


      $validate=  validator::make($request->all(),[
          'title'=>['required'],
          'body'=>['required'],
      ]);

     if ($validate->fails()){
         return $this->ShowResponse(null,$validate->errors(),400);


     }

       $post=Post::create($request->all());

       if ($post){

           return $this->ShowResponse(new PostResource($post),"The post Save",201);
       }

      return $this->ShowResponse(null,"The post Not Save",400);

  }


  public function destroy($id){

       $post=Post::where('id',$id)->delete();

       if ($post){

           return $this->ShowResponse(null,"تمت العملية بنجاح",250);
       }

      return $this->ShowResponse(null,"فشلت العملية ",240);

  }

  public function update(Request $request,$id){

       $post=Post::where('id',$id)->update($request->all());
      if ($post){

          return $this->ShowResponse(null,"تمت العملية بنجاح",290);
      }

      return $this->ShowResponse(null,"فشلت العملية ",280);


  }
}
