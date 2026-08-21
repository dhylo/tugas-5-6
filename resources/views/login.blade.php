<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Sistem Kepegawaian</title>
    @vite('resources/css/app.css')
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-950 via-blue-950 to-slate-900 px-4 py-8 text-slate-900">
    <main class="mx-auto flex min-h-[calc(100vh-4rem)] max-w-md items-center justify-center">
        <section class="w-full rounded-2xl bg-white p-8 shadow-2xl sm:p-10">
            <div class="mb-8 text-center">
                <div class="mx-auto mb-4 flex h-14 w-14 items-center justify-center rounded-2xl bg-gradient-to-br from-blue-500 to-blue-700 text-xl font-bold text-white shadow-lg">SK</div>
                <p class="mb-2 text-sm font-semibold uppercase tracking-[0.2em] text-blue-600">Sistem Kepegawaian</p>
                <h1 class="text-3xl font-bold text-slate-900">Selamat datang kembali</h1>
                <p class="mt-2 text-sm text-slate-500">Masuk untuk mengelola data divisi.</p>
            </div>

            @if ($errors->any())
                <div class="mb-5 rounded-lg border border-red-200 bg-red-50 px-4 py-3 text-sm text-red-700">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="{{ route('proses.login') }}" method="POST" class="space-y-5">
                @csrf
                <div>
                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">Email</label>
                    <input id="email" type="text" name="email" value="{{ old('email') }}" placeholder="Masukkan email" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </div>
                <div>
                    <label for="password" class="mb-2 block text-sm font-semibold text-slate-700">Password</label>
                    <input id="password" type="password" name="password" placeholder="Masukkan password" required class="w-full rounded-lg border border-slate-300 px-4 py-3 outline-none transition focus:border-blue-500 focus:ring-2 focus:ring-blue-100">
                </div>
                <button type="submit" class="w-full rounded-lg bg-blue-600 px-4 py-3 font-semibold text-white shadow-lg transition hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Login</button>
            </form>

            <p class="mt-6 text-center text-sm text-slate-500">Belum memiliki akun?
                <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:text-blue-700">Register</a>
            </p>
        </section>
    </main>
    @vite('resources/js/app.js')
</body>
</html>