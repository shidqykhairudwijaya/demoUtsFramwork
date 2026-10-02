```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Post</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="mx-auto mt-12 max-w-3xl">

        <div class="mb-5 flex items-center justify-between">
            <h1 class="text-2xl font-bold text-gray-800">
                Daftar Post
            </h1>

            <a
                href="{{ route('posts.create') }}"
                class="rounded-lg bg-blue-600 px-4 py-2 text-sm text-white"
            >
                + Tambah Post
            </a>
        </div>

        @forelse ($posts as $post)

            <div class="mb-4 rounded-xl bg-white p-5 shadow">

                <h2 class="text-lg font-bold text-gray-800">
                    {{ $post->title }}
                </h2>

                <p class="mt-2 text-gray-600">
                    {{ $post->content }}
                </p>

            </div>

        @empty

            <div class="rounded-xl bg-white p-6 text-center text-gray-500 shadow">
                Belum ada post.
            </div>

        @endforelse

    </div>

</body>
</html>
```
