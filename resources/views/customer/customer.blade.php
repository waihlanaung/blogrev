@extends('layouts.app2')
@section('content2')
Id : {{$customer->id}}<p></p>
Name:{{$customer->name}}<p></p>
Email:{{$customer->email}}<p></p>
<a href="/customerupdate/{{$customer->id}}"><button>Update</button></a>
<button onclick="del({{$customer->id}})">Delete</button>
<script>
    function del(id) {
        let con = confirm('Are you sure to delete');
        if(con){
            location.href='/customerdelete/'+id;
        }

    }
</script>
@endsection
