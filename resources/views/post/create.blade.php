<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New post</title>
</head>
<x-simple-navigation></x-simple-navigation>
<body>

<form>
    <div class="space-y-12">
        <div class="border-b border-white/10 pb-12">
            <h2 class="text-base/7 font-semibold text-white">New post</h2>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-4">
                    <label for="title" class="block text-sm/6 font-medium text-white">Title</label>
                    <div class="mt-2">
                        <div
                            class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">
                            <div class="shrink-0 text-base text-gray-400 select-none sm:text-sm/6">workcation.com/</div>
                            <input id="title" type="text" name="title" placeholder="janesmith"
                                   class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"/>
                        </div>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="description" class="block text-sm/6 font-medium text-white">Description</label>
                    <div class="mt-2">
                        <textarea id="description" name="description" rows="3"
                                  class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="photo" class="block text-sm/6 font-medium text-white">Photo</label>
                    <div class="mt-2 flex items-center gap-x-3">

                        <button type="button"
                                class="rounded-md bg-white/10 px-3 py-2 text-sm font-semibold text-white inset-ring inset-ring-white/5 hover:bg-white/20">
                            Change
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
        <button type="submit"
                class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
            Save
        </button>
    </div>
</form>


</body>
</html>
