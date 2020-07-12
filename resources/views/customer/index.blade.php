@extends('layouts.app2')
@section('content2')
    <style>
        table,th,td{
            border: 1px solid red;
        }
    </style>
    <div class="container">
<h1>Customer List Ok</h1>

<table>
    <thead>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    </thead>
    <tbody>
    @foreach($customers as $customer)
    <tr>
        <td>{{$customer->id}}</td>
        <td><a href="/customerdetail/{{$customer->id}}">{{$customer->name}}</a></td>
        <td>{{$customer->email}}</td>
    </tr>
        @endforeach
    </tbody>
</table>
    </div>
@endsection
