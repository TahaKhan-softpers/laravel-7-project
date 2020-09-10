@extends('frontend.layouts.default')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="jumbotron rounded-0">
                    <form action="store" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Description</label>
                            <textarea class="form-control" cols="30" rows="10" name="description">

                            </textarea>
                            {{--                            <input type="text" class="form-control" id="exampleInputPassword1" name="description">--}}
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Image file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

