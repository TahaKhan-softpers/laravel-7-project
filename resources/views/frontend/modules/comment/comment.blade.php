@extends('frontend.layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="jumbotron">

                        @if(Auth::user()->role=="ADMIN")
                            <h1>This is All Comments Page</h1>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Comment</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Owner Email</th>
                                <th scope="col">Post</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($comment as $comments)
                                @if(isset($comments->post->title))
                            <tr>
                                <td>{{$comments->description}}</td>
                                <td>{{$comments->user->name}}</td>
                                <td>{{$comments->user->email}}</td>
                                <td>{{$comments->post->title}}</td>

                                <td><a role="button" class="btn btn-primary" href="{{url('post/show/'.$comments->post->id)}}">Show Post</a>
                                    <a role="button" class="btn btn-secondary" href="#">Delete</a></td>
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
