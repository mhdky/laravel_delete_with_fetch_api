<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Delete Data Tanpa Reload Halaman</title>
</head>
<body>
    <div class="w-[800px] mx-auto my-10">
        <form id="delete-post-form" method="POST">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        @foreach ($posts as $post)
            <div class="mb-3 pb-2 border-b border-zinc-300" data-post-id="{{ $post->id }}">
                <h1>{{ $post->title }}</h1>
                <p class="mt-1 text-zinc-500 text-sm">{{ $post->author }}</p>
                <p class="mt-1 text-sm">{{ $post->excerpt }}</p>

                <div class="w-full flex justify-end">
                    <button type="submit" class="btnDelete mt-3 text-red-500" onclick="deletePost($post->id)">Hapus</button>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>