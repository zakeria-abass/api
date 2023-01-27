@extends('layouts.master')
@section('css')
@endsection

@section('content')
				<!-- row -->
				<div class="container">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Body</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->body}}</td>
                            <td><a href="{{route('post.edit',$post->id)}}" class="btn btn-info"><i class="fa fa-edit"></i></a></td>
                            <td>
                                <form action="{{route('post.destroy',$post->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>

                        @endforeach

                        </tbody>
                    </table>

				</div>
				</div>
				<!-- row closed -->
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
