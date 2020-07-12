@extends('layouts.app2')
@section('content2')
    <div class="container">
    <h1>Customer Add</h1>
    <form action="/customeradd" method="post">
    @csrf

    <label for="name" >Customer name</label>
    <input type="text" name="name" id="name"><p></p>
    <label for="email">Customer email</label>
    <input type="email" name="email" id="email"><p></p>
    <label for="password">Password</label>
    <input type="password" name="password" id="password"><p></p>
    <input type="submit" value="submit">
</div>
</form>
@endsection
