
@extends('layouts.app2')
@section('content2')
    <div class="container">
            <div class="row">
                <div class="mt-3">
                    <div class="col-sm-3"></div>
        <div class="col-md-10 d-flex align-items-stretch grid-margin">
            <div class="row flex-grow ">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <form  action="/post" method="post" enctype="multipart/form-data">
                                @csrf
                                @include('post.form')
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
    </div>
@endsection

