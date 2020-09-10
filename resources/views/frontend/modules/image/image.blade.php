@extends('frontend.layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="jumbotron">
                        @if(AUTH::user()->role=="ADMIN")
                            <h1>This is All Images Page</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Owner</th>
                                <th scope="col">OWNER EMAIL</th>
                                <th scope="col">POST</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($image as $images)
                                @if(isset($images->post->title))
                                    <tr>
                                        <td><img class="col-5" src="{{asset('assets/img/'.$images->name)}}"></td>
                                        <td>{{$images->post->user->name}}</td>
                                        <td>{{$images->post->user->email}}</td>
                                        <td>{{$images->post->title}}</td>

                                        <td><a role="button" class="btn btn-primary" href="{{url('post/show/'.$images->post->id)}}">Show Post</a>
                                            <a role="button" class="btn btn-danger" href="#">Delete</a></td>
                                    </tr>
                                @endif
                            @endforeach

                            </tbody>
                        </table>
                        @else
                            <h1>Are you new here? </h1>
                            <p >Please use the  <a type="button" href="{{url('post/')}}">post page</a> to create post if you dont have post.<b>Its that easy!</b></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
