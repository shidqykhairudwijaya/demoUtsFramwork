<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { font-family: sans-serif; }
    </style>
</head>

<body class="bg-gray-100 text-gray-800">

    <div class="max-w-xl mx-auto mt-12 px-4">
        
        <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-200">
            <h1 class="text-2xl font-bold mb-6">Tulis Berita Baru</h1>

            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                
                <!-- Simulasi User yang sedang Login (ID 2 = User Biasa / Mahasiswa) -->
                <!-- HACKER AKAN MENGEDIT INI MENJADI VALUE="1" SAAT DEMO -->
                <input type="hidden" name="user_id" value="2">

                <div class="mb-5">
                    <label class="block text-sm font-semibold mb-2">Judul</label>
                    <input 
                        type="text" 
                        name="title" 
                        value="{{ old('title') }}"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500"
                        placeholder="Masukkan judul..."
                    >
                    @error('title')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold mb-2">Isi Berita</label>
                    <textarea 
                        name="content" 
                        rows="6" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500"
                        placeholder="Tulis isi berita di sini..."
                    >{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center gap-3">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-medium transition">
                        Simpan Berita
                    </button>
                    <a href="{{ route('posts.index') }}" class="text-gray-500 hover:text-gray-800 text-sm font-medium transition">
                        Batal
                    </a>
                </div>
            </form>
        </div>

    </div>

</body>
</html>
