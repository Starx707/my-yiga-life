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
<a href="/category/{{1}}">None</a>
<a href="/category/{{2}}">Cool</a>
<a href="/category/{{3}}">Bananas</a>
<a href="/category/{{4}}">News</a>
<a href="/index">No filters</a>

<form action="{{ route('search') }}" method="GET">
    <input type="text" name="search" required/>
    <button type="submit">Search</button>
</form>

@if($posts->isNotEmpty())
    @foreach($posts as $post)
        @if($post->private === 0)
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#"></a>
                <div class="relative"><a href="#">
                        <img class="w-full"
                             src="https://images.pexels.com/photos/61180/pexels-photo-61180.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500"
                             alt="Sunset in the mountains">
                        <div
                            class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                    </a>
                    <a href="#!">
                        <a href="/post/{{$post->id}}/">Details</a>
                        <div
                            class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            Tag (filter)
                        </div>
                    </a>
                </div>
                <div class="px-6 py-4 mb-auto">
                    <a href="#"
                       class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                        {{$post->title}}</a>
                    <p class="text-gray-500 text-sm">
                        {{$post->details}}
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                    <svg height="13px" width="13px" version="1.1" id="Layer_1"
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                         y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                         xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="ml-1">{{$post->likes}} likes</span>
                </span>
                </div>
            </div>

        @endif
    @endforeach
@else
    <div>
        <p>No posts found</p>
    </div>
@endif


{{--<p> Category: {{$post->category->name}}--//category()->where.... (not needed and with () it's a query)}}
{{--<a href="{{route('posts.create')}}">Add new page</a>--}}
{{--need to make directory thingy?--}}
<div>
    {{--    {{ $posts->links() }}--}}
</div>
</body>
</html>
