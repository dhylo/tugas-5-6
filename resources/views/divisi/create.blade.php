<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Divisi - Sistem Kepegawaian</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gradient-to-br from-slate-900 via-slate-800 to-slate-900 min-h-screen">
    <!-- Navbar -->
    <nav class="bg-white shadow-lg border-b-4 border-blue-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-700 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-lg">SK</span>
                    </div>
                    <h1 class="text-2xl font-bold text-gray-900">Sistem Kepegawaian</h1>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Header -->
        <div class="mb-8">
            <h2 class="text-4xl font-bold text-white mb-2">➕ Tambah Divisi Baru</h2>
            <p class="text-gray-400">Isi form berikut untuk menambahkan divisi baru ke sistem</p>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-xl shadow-2xl p-8">
            <form action="{{ route('divisi.store') }}" method="POST">
                @csrf

                <!-- Kode Divisi -->
                <div class="mb-6">
                    <label for="kode" class="block text-gray-900 font-semibold mb-2">Kode Divisi</label>
                    <input 
                        type="text" 
                        id="kode" 
                        name="kode" 
                        value="{{ old('kode') }}"
                        placeholder="Contoh: D01" 
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 @error('kode') border-red-500 @enderror"
                    >
                    @error('kode')
                    <div class="mt-2 text-red-500 text-sm font-semibold flex items-center space-x-1">
                        <span>❌</span>
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <!-- Nama Divisi -->
                <div class="mb-8">
                    <label for="nama" class="block text-gray-900 font-semibold mb-2">Nama Divisi</label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        value="{{ old('nama') }}"
                        placeholder="Contoh: Divisi Teknologi Informasi" 
                        class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition duration-200 @error('nama') border-red-500 @enderror"
                    >
                    @error('nama')
                    <div class="mt-2 text-red-500 text-sm font-semibold flex items-center space-x-1">
                        <span>❌</span>
                        <span>{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <!-- Buttons -->
                <div class="flex space-x-4">
                    <button 
                        type="submit" 
                        class="flex-1 bg-gradient-to-r from-green-500 to-green-700 hover:from-green-600 hover:to-green-800 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-200 flex items-center justify-center space-x-2"
                    >
                        <span>✅</span>
                        <span>Simpan Divisi</span>
                    </button>
                    <a 
                        href="{{ route('divisi.index') }}" 
                        class="flex-1 bg-gray-500 hover:bg-gray-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-200 flex items-center justify-center space-x-2"
                    >
                        <span>❌</span>
                        <span>Batal</span>
                    </a>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-400 py-8 mt-16 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; 2026 Sistem Kepegawaian. SCREENESIA.</p>
        </div>
    </footer>

    @vite('resources/js/app.js')
</body>
</html>