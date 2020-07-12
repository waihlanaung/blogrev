@extends('layouts.app2')
@section('content2')
<h1>Customer Add</h1>

<form action="/customerupdate" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$customer->id}}">
    <label for="name" >Customer name</label>
    <input type="text" name="name" id="name" value="{{$customer->name}}"><p></p>
    <label for="email">Customer email</label>
    <input type="email" name="email" id="email" value="{{$customer->email}}"><p></p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" value="{{$customer->password}}"><p></p>
    <input type="submit" value="submit">

</form>
@endsection
