<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit {{$post->title}}</title>
</head>
<body>
<form method="POST" action="/post/{{{$post->id}}}">
    @csrf
    @method('PATCH')
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
            <h2 class="text-base/7 font-semibold text-white">Edit {{$post->title}}</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                            <input id="title" type="text" name="title" value="{{$post->title}}"
                                   class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                   required/>
                        </div>
                    </div>
                </div>

                @error('title')
                <p>{{$message}}</p>
                @enderror

                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="3"
                                  class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"
                                  required
                        >{{$post->details}}</textarea>
                    </div>
                </div>

                @error('description')
                <p>{{$message}}</p>
                @enderror

                <div class="col-span-full">
                    <label for="photo" class="block text-sm/6 font-medium text-white">Photo</label>
                    <div class="mt-2 flex items-center gap-x-3">

                        <button type="button"
                                class="rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20">
                            Change
                        </button>
                    </div>
                </div>

                <label for="post" class="block text-sm/6 font-medium text-white">Posting type</label>
                <div class="flex items-center gap-x-3">
                    <input id="post-public" type="radio" name="post-public"
                           class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-500 checked:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden"/>
                    <label for="post-public" class="block text-sm/6 font-medium text-white">
                        Public post</label>
                </div>
                <div class="flex items-center gap-x-3">
                    <input id="post-private" type="radio" name="post-private"
                           class="relative size-4 appearance-none rounded-full border border-white/10 bg-white/5 before:absolute before:inset-1 before:rounded-full before:bg-white not-checked:before:hidden checked:border-indigo-500 checked:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500 disabled:border-white/5 disabled:bg-white/10 disabled:before:bg-white/20 forced-colors:appearance-auto forced-colors:before:hidden"/>
                    <label for="post-private" class="block text-sm/6 font-medium text-white">
                        Private post (only visible to you)</label>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/post/{{$post->id}}">Cancel</a>
        <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            Save
        </button>
        <button form="delete-form">Delete</button>
    </div>
</form>

<form method="POST" action="/post/{{$post->id}}" class="hidden" id="delete-form">
    @csrf
    @method('DELETE')
</form>

</body>
</html>
