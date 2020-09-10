<?php
?>
<html>
<head>
    <meta charset="UTF-8" >
    <title>This is Forums Page</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div style="width: 600px; height: 300px; margin: 0 auto; background-color: #3f9ae5;">
    <form method="post" action="/post/update/{{$edit->id}}" >
        @csrf
        <div style="width: 70%; height: 40px; margin: 0 auto;">
            <label>Title</label>

            <input type="text" name="title" value="{{$edit->title}}">
        </div>
        <div style="width: 70%; height: 40px; margin: 0 auto;">
            <label>Picture_id</label>
            <input type="number" name="image" value="{{$edit->image}}">
        </div>
        <input type="number" hidden name="user_id" value="{{$edit->user_id}}">
        <input type="number" hidden name="location_id" value="{{$edit->location_id}}">
        <input type="number" hidden name="update_id" value="{{$edit->update_id}}">
        <div style="width: 70%; height: 40px; margin: 0 auto; ">
            <label>Description</label>
            <input type="text" name="description" value="{{$edit->description}}">

        </div>
        <input type="submit" value="Submit" >
    </form>
</div>



</body>
</html>
<?php
