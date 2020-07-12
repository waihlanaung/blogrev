
@extends('layouts.app2')
@section('content2')
    <div class="container">
        <div class="content-wrapper">
            <div class="mt-3">
            <div class="row">
                <div class="col-sm-3"></div>
            <div class="flex-lg-row">
                <div class="card">
                    <div class="card-body">
<h1>Post Detail</h1>
Title         : {{$post->title}}<p></p>
Content       : {{$post->content}}<p></p>
Customer name : {{$post->customer->name}}<p></p>
Customer email: {{$post->customer->email}}<p></p>

Image :<img src="{{asset('storage/'.$post->image)}}" class="img-thumbnail" alt="Cinque Terre" width="304" height="236">
<form action="/post/{{$post->id}}" id="delete-task" method="post">
    @csrf
    @method('DELETE')
</form>
                        <div class="mt-sm-3">
                    <div class="row">
                  <div class="col">
                  <a href="/post/{{$post->id}}/edit" ><button class="btn btn-primary btn-block">Update</button></a>
                        </div>
                        <div class="col">
                        <button type="submit" form="delete-task" class="btn btn-danger btn-block">Delete</button>
                                        </div>
                                    </div>
                                </div>
                             </div>
        </div>
        </div>
        </div>
        </div>
        </div>
    </div>
@endsection
{{--</body>--}}
{{--</html>--}}
