<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>@yield('title','Portal Event IT Del')</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style> body { font-family: 'Poppins', sans-serif } </style>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen">
  <header class="bg-[#002B5B] text-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
      <a href="{{ route('home') }}" class="text-lg font-bold tracking-wide">Portal Event IT Del</a>
      <nav class="space-x-4 text-sm">
        <a class="hover:text-[#3A9BDC]" href="{{ route('home') }}">Beranda</a>
        <a class="hover:text-[#3A9BDC]" href="{{ route('register.create') }}">Daftar</a>
        <a class="hover:text-[#3A9BDC]" href="{{ route('participants.index') }}">Peserta</a>
      </nav>
    </div>
  </header>

  <main class="max-w-6xl mx-auto px-4 py-8">
    @if(session('success'))
      <div class="mb-6 p-3 rounded bg-green-50 text-green-700 border border-green-200">
        {{ session('success') }}
      </div>
    @endif
    @yield('content')
  </main>

  <footer class="text-center text-xs text-gray-500 py-8 border-t">
    © {{ date('Y') }} Institut Teknologi Del · Sistem Informasi <br>
    Dibangun menggunakan <span class="text-[#002B5B] font-semibold">Laravel + Tailwind</span>
  </footer>
</body>
</html>
