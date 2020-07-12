@extends('layouts.app')
 @section('content')
     <div class="container">
         <h1>User Add here</h1>
            <form action="/useradd" method="post">
             @csrf
                <div class="form-group row">
                   <div class="col-sm-2">
             <label for="name" >User name</label>
                </div>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="name" id="name">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
             <label for="email">User email</label>
                    </div>
                    <div class="col-sm-5">
             <input type="email" class="form-control" name="email" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
             <label for="password">Password</label>
                    </div>
                    <div class="col-sm-5">
             <input type="password" class="form-control" name="password" id="password">
                    </div>
                </div>
             <input type="submit" class="btn btn-primary" value="submit">
            </form>
     </div>
 @endsection
