<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All posts</title>
</head>
<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
<x-simple-navigation></x-simple-navigation>
<body>
<table>
    <tr>
        <th>User</th>
        <th>Title</th>
        <th>Status</th>
    </tr>
    {{--    @foreach($allPosts as $post)--}}

    {{--    @endforeach--}}
    @foreach($posts as $post)
        <tr>
            <td>User name</td>
            <td>{{$post->title}}</td>
            <td>{{$post->private}}</td>
            <td>
                <button form="delete-form">Delete</button>
            </td>
            <td><a href="/hide/{{$post->id}}">Hide</a></td>
            <td><a href="/post/{{$post->id}}/">View</a></td>
        </tr>
    @endforeach

    <form method="POST" action="/post/{{$post->id}}" class="hidden" id="delete-form">
        @csrf
        @method('DELETE')
    </form>
</table>
</body>
</html>
