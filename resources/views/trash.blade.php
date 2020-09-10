<?php



?>

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>

    {{--    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">--}}
    {{--    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>This is testing page</title>
    <style>

        .main,.section{
            width: 1335px;
            height: 500px;
            background-color: #ffb902;
            /*position: absolute;*/
            float: left;


        }
        .section{
            margin-top: 50px;
        }
        .main-second{
            /*position: relative;*/
            width: 800px;
            height: 400px;
            margin: 0 auto;
            margin-top: 3.5%;
            margin-bottom: 3%;
            background-color: #c5c6c6;
            border: 4px solid #b5afaf;

        }
    </style>
</head>
<body>

<div class="main">
    <div class="main-second">
        @if(isset($Comment))
            <table>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>User ID</th>
                    <th>Post ID</th>
                </tr>
                <tr>

                    <td><?php echo $Comment->id; ?> </td>
                    <td><?php echo $Comment->description; ?> </td>
                    <td><?php //echo $Comment->comment[user_id]; ?></td>
                    <td><?php //echo $Comment->comment[post_id]; ?></td>


                </tr>

            </table>
            <?php
            print_r($Comment);
            ?>
        @else
            <?php echo "no data to be shown";?>
            <p>


            </p>
        @endif
    </div>

</div>
<div class="section">
    <div class="main-second">
        {{--          {{print_r($post)}}--}}

        @if(isset($post))
            {{--print_r(sizeof($post)) --}}


            <table>

                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>User ID</th>
                    <th>Location ID</th>
                    <th>Updated BY</th>
                </tr>
                @foreach($post as $data)
                    <tr>

                        <td>{{$data->id }} </td>
                        <td>{{ $data->title }}</td>
                        <td>{{$data->image  }}</td>
                        <td>{{$data->description}}</td>
                        <td>{{ $data->user_id}}</td>
                        <td>{{$data->location_id}}</td>
                        <td>{{$data->update_id}}</td>


                    </tr>
                @endforeach
            </table>

            <p>

                <?php
                print_r($post);
                ?>
            </p>
        @else
            <?php echo "no data to be shown";?>
        @endif

    </div>

</div>
<div class="section">
    <div class="main-second">

        <form action="/post/create/" method="POST">
            @csrf
            <input type="text" name="title">
            <input type="text" name="description">
            <input type="submit" value="Submit">
        </form>
    </div>

</div>

</body>
</html>
