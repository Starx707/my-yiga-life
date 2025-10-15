<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>
{{--<h1>About {{$name}}</h1>--}}
<p>He's a fluffy boi</p>
<a href="{{route('about', ['name' => "Julia"])}}">Here's Julia</a>
<p>Amount of likes: {{$post['likes']}}</p>
<p>Current location: {{$post['location']}}</p>
<br>
<h2>More data</h2>

</body>
</html>
