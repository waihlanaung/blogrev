{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Post List</title>--}}
@extends('layouts.app2')
@section('content2')
    <div class="container">
{{--    <style>--}}
{{--       table,th,td{--}}
{{--           border: 1px solid red;--}}
{{--       }--}}

{{--    </style>--}}
{{--</head>--}}
{{--<body>--}}
{{--<h>Post List here</h>--}}
{{--<table>--}}
{{--    <thead>--}}
{{--    <th>Title</th>--}}
{{--    <th>Content</th>--}}
{{--    <th>Image</th>--}}
{{--    <th>Customer name</th>--}}
{{--    <th>Customer email</th>--}}
{{--    </thead>--}}

{{--    <tbody>--}}
{{--    @foreach($posts as $post)--}}
{{--    <tr>--}}
{{--        <td><a href="/post/{{$post->id}}"> {{$post->title}}</a></td>--}}
{{--        <td>{{$post->content}}</td>--}}
{{--        <td><img src="{{asset('storage/'.$post->image)}} " width="100" height="100"></td>--}}
{{--        <td>{{$post->customer->name}}</td>--}}
{{--        <td>{{$post->customer->email}}</td>--}}
{{--    </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
        <div class="col-md-12 mt-3 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">Post list here</h2>

                    <table class="table table-striped">
                        <thead>

                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Customer name</th>
                            <th>Customer email</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td class="py-1">
                                <img src="{{asset('storage/'.$post->image)}}" /> </td>
                            <td><a href="/post/{{$post->id}}"> {{$post->title}}</a></td>
                            <td>{{$post->content}}</td>
                            <td>{{$post->customer->name}}</td>
                            <td>{{$post->customer->email}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
{{--        <div class="col-lg-12 grid-margin stretch-card">--}}
{{--            <div class="card">--}}
{{--                <div class="card-body">--}}
{{--                    <h4 class="card-title">Bordered table</h4>--}}
{{--                    <p class="card-description"> Add class <code>.table-bordered</code> </p>--}}
{{--                    <table class="table table-bordered">--}}
{{--                        <thead>--}}
{{--                        <tr>--}}
{{--                            <th> # </th>--}}
{{--                            <th> First name </th>--}}
{{--                            <th> Progress </th>--}}
{{--                            <th> Amount </th>--}}
{{--                            <th> Deadline </th>--}}
{{--                        </tr>--}}
{{--                        </thead>--}}
{{--                        <tbody>--}}
{{--                        <tr>--}}
{{--                            <td> 1 </td>--}}
{{--                            <td> Herman Beck </td>--}}
{{--                            <td>--}}
{{--                                <div class="progress">--}}
{{--                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td> $ 77.99 </td>--}}
{{--                            <td> May 15, 2015 </td>--}}
{{--                        </tr>--}}
{{--                        <tr>--}}
{{--                            <td> 2 </td>--}}
{{--                            <td> Messsy Adam </td>--}}
{{--                            <td>--}}
{{--                                <div class="progress">--}}
{{--                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                </div>--}}
{{--                            </td>--}}
{{--                            <td> $245.30 </td>--}}
{{--                            <td> July 1, 2015 </td>--}}
{{--                        </tr>--}}
{{--                       --}}
{{--                        </tbody>--}}
{{--                    </table>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
{{--</body>--}}
{{--</html>--}}
