<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divisi - Sistem Kepegawaian</title>
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
                    <h1 class="text-2xl font-bold text-gray-900">Selamat Datang, {{ auth()->user()->name }}</h1>
                </div>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center gap-2 rounded-lg border border-red-500 px-4 py-2 text-sm font-semibold text-red-600 transition hover:bg-red-500 hover:text-white focus:outline-none focus:ring-2 focus:ring-red-200">
                        <span aria-hidden="true">↪</span>
                        <span>Logout</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <!-- Alert Messages -->
        @if ($message = Session::get('success'))
        <div class="mb-6 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg flex items-center space-x-3 animate-pulse">
            <span class="text-2xl">✅</span>
            <div>
                <p class="font-semibold">Sukses!</p>
                <p class="text-sm">{{ $message }}</p>
            </div>
        </div>
        @endif

        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-4xl font-bold text-white mb-2">📊 Data Divisi</h2>
                    <p class="text-gray-400">Kelola divisi dalam organisasi Anda</p>
                </div>
                <a href="{{ route('divisi.create') }}" class="bg-gradient-to-r from-blue-500 to-blue-700 hover:from-blue-600 hover:to-blue-800 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transform hover:scale-105 transition duration-200 flex items-center space-x-2 inline-block">
                    <span>➕</span>
                    <span>Tambah Divisi</span>
                </a>
            </div>
        </div>

        <!-- Table Section -->
        <div class="bg-white rounded-xl shadow-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-gradient-to-r from-blue-600 to-blue-800 text-white">
                            <th class="px-8 py-4 text-left font-semibold text-sm uppercase tracking-wider">No</th>
                            <th class="px-8 py-4 text-left font-semibold text-sm uppercase tracking-wider">Kode Divisi</th>
                            <th class="px-8 py-4 text-left font-semibold text-sm uppercase tracking-wider">Nama Divisi</th>
                            <th class="px-8 py-4 text-center font-semibold text-sm uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @forelse ($divisi as $d)
                        <tr class="hover:bg-blue-50 transition duration-150 even:bg-gray-50">
                            <td class="px-8 py-4 text-gray-700 font-medium">{{ $loop->iteration }}</td>
                            <td class="px-8 py-4">
                                <span class="inline-block bg-blue-100 text-blue-800 px-4 py-2 rounded-full font-semibold text-sm">{{ $d->kode }}</span>
                            </td>
                            <td class="px-8 py-4">
                                <p class="text-gray-900 font-medium">{{ $d->nama }}</p>
                            </td>
                            <td class="px-8 py-4">
                                <div class="flex justify-center space-x-3">
                                    <a href="{{ route('divisi.edit', $d->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-200 transform hover:scale-105 inline-flex items-center space-x-1">
                                        <span>✏️</span>
                                        <span>Edit</span>
                                    </a>
                                    <form action="{{ route('divisi.destroy', $d->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus divisi ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded-lg shadow transition duration-200 transform hover:scale-105 inline-flex items-center space-x-1">
                                            <span>🗑️</span>
                                            <span>Hapus</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-8 py-12 text-center">
                                <p class="text-gray-500 text-lg">📭 Tidak ada data divisi</p>
                                <p class="text-gray-400 text-sm mt-2">Silakan tambahkan divisi baru dengan klik tombol "Tambah Divisi"</p>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer Stats -->
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl p-6 text-white shadow-lg">
                <p class="text-blue-100 text-sm font-semibold mb-2">Total Divisi</p>
                <p class="text-4xl font-bold">{{ count($divisi) }}</p>
            </div>
            <div class="bg-gradient-to-br from-purple-500 to-purple-700 rounded-xl p-6 text-white shadow-lg">
                <p class="text-purple-100 text-sm font-semibold mb-2">Status</p>
                <p class="text-2xl font-bold">✅ Aktif</p>
            </div>
            <div class="bg-gradient-to-br from-green-500 to-green-700 rounded-xl p-6 text-white shadow-lg">
                <p class="text-green-100 text-sm font-semibold mb-2">Total Record</p>
                <p class="text-lg font-bold">{{ $divisi->count() }} Item</p>
            </div>
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