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
            <form method="post" action="/post/store" >
                @csrf
            <div style="width: 70%; height: 40px; margin: 0 auto;">
                <label>Title</label>
                <input type="text" name="title">
            </div>
                <div style="width: 70%; height: 40px; margin: 0 auto;">
                    <label>Picture_id</label>
                    <input type="number" name="image">
                </div>
                <input type="number" hidden name="user_id" value="123">
                <input type="number" hidden name="location_id" value="123">
                <input type="number" hidden name="update_id" value="123">
            <div style="width: 70%; height: 40px; margin: 0 auto;">
                <label>Description</label>
                <input type="text" name="description">

            </div>
                <input type="submit" value="Submit" >
            </form>
        </div>



    </body>
</html>
