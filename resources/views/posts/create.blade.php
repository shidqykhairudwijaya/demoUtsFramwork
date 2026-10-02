<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Post</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="mx-auto mt-12 max-w-xl">

        <div class="rounded-xl bg-white p-6 shadow">

            <h1 class="mb-6 text-2xl font-bold text-gray-800">
                Tambah Post
            </h1>

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label class="mb-2 block text-sm font-medium">
                        Judul
                    </label>

                    <input
                        type="text"
                        name="title"
                        value="{{ old('title') }}"
                        placeholder="Masukkan judul"
                        class="w-full rounded-lg border px-3 py-2"
                    >

                    @error('title')
                        <p class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block text-sm font-medium">
                        Isi
                    </label>

                    <textarea
                        name="content"
                        rows="5"
                        placeholder="Masukkan isi post"
                        class="w-full rounded-lg border px-3 py-2"
                    >{{ old('content') }}</textarea>

                    @error('content')
                        <p class="mt-1 text-sm text-red-500">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <button
                    type="submit"
                    class="rounded-lg bg-blue-600 px-5 py-2 text-white hover:bg-blue-700"
                >
                    Simpan
                </button>

                <a
                    href="{{ route('posts.index') }}"
                    class="ml-2 text-sm text-gray-600"
                >
                    Kembali
                </a>

            </form>

        </div>

    </div>

</body>
</html>
```
