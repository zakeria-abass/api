@extends('layouts.master')
@section('css')
@endsection

@section('content')
				<!-- row -->
				<div class="container">
                    <form action="{{route('post.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="email">Title:</label>
                            <input type="text" class="form-control" placeholder="Enter email" id="email" name="title">
                        </div>
                        <div class="form-group">
                            <label for="pwd">body:</label>
                            <input type="text" class="form-control" placeholder="Enter password" id="pwd" name="body">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
				</div>
				</div>
				<!-- row closed -->
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection
