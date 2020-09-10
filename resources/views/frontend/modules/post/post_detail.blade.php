@extends('frontend.layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row justify-content-center">
                    <div class="jumbotron">
                        <h1>POST DETAIL PAGE</h1>
{{--                        @foreach($post as $data)--}}
                        <div class="card" style="width: 28rem;">
                            <img src="{{asset('assets/img/'.$post->image->name)}}" class="card-img-top" alt="no image to display">
                            <div class="card-body">
                                <h5 class="card-title">{{$post->title}}</h5>
                                <div class="jumbotron">
                                <p class="card-text">{{$post->description}}</p>
                                </div>



                                @if(isset($post->comments))
                                    @foreach($post->comments as $comment)
                                        <p><b>{{$comment->user->name}}</b>({{$comment->user->email}})</p>
                                            @if(Auth::user()->email==$comment->user->email)
                                                <form  action="{{route('comment.destroy',$comment->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <p><button type="submit" class="btn btn-danger" >Delete Comment</button>
                                                    </p>
                                                </form>

                                            @endif
                                            <p><input class="form-control" type="text" placeholder="{{$comment->description}}" readonly></p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="card-body">
                              <div class="col-12">
                                <form class="form-inline" method="post" action="{{route('comment.store')}}">
                                    @csrf
                                    <input type="text" value="{{$post->id}}" name="post_id" hidden>
                                    <input type="text" value="{{Auth::user()->id}}" name="user_id" hidden>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <input type="text" class="form-control" id="inputPassword2" name="description" placeholder="Comment Here">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Comment</button>
                                </form>
                              </div>
                            </div>
                            <div class="card-body">
                                <a href="{{url('post/')}}" class="btn btn-primary">All Post</a>
                                <a href="{{url('post/edit/'.$post->id)}}" class="btn btn-primary">Wanna Edit This Post?</a>



                                @if(Auth::user()->email==$post->email)
                                    <a href="{{url('post/delete/'.$post->id)}}" class="btn btn-danger">Delete post :(</a>
                                @endif
                            </div>
                            </div>

                        </div>
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
