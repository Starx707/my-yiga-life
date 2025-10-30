<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>posts</title>
</head>
<x-simple-navigation></x-simple-navigation>
<body>
<h1>Posts</h1>
{{--<p>Amount of likes: {{$post_d['likes']}}</p>--}}
{{--<p>Current location: {{$post_d['location']}}</p>--}}

{{--<h2>More data</h2>--}}
{{--<p>{{$post_location}}</p>--}}
{{--href="{{route('posts.show', $post->id)}}"--}}

{{--
form action="{{route('posts.pagename')}}" aka folder.pagename
@crsf (for token server protection -> if token is present and works then server accepts it)
-> don't forget names with all values
@error
error element such as div
form

valure- "" {{ old{'nameinput'} }}
--}}



{{--
select> name="category_id" id=""
    @foreach($categories as $category)
        option value=""{{category->id}}> {{$category->name}}</
</
--}}

@foreach($posts as $post)
    @if($post->private == false)
        <div>
            <h4>Post: {{$post->id}}</h4>
            {{--add image--}}
            <p style="text-decoration: underline">{{$post->title}}</p>
            <p>{{$post->details}}</p>
            <p>Location player: {{$post->location}}</p>
            <p>Yiga points: {{$post->yiga_points}}</p> <!--in live a private thing-->
            <p>Likes: {{$post->likes}}</p>
        </div>
    @endif
@endforeach
{{--<p> Category: {{$post->category->name}}--//category()->where.... (not needed and with () it's a query)}}
{{--<a href="{{route('posts.create')}}">Add new page</a>--}}
{{--need to make directory thingy?--}}
</body>
</html>
