@extends('layouts.app')
@section('title','Form Pendaftaran Acara IT Del')
@section('content')
<div class="max-w-xl mx-auto bg-white rounded-xl p-8 shadow-lg border-t-4 border-[#002B5B]">
  <h2 class="text-2xl font-bold text-[#002B5B] mb-4">Formulir Pendaftaran</h2>
  <form method="POST" action="{{ route('register.store') }}" class="space-y-5">
    @csrf
    <div>
      <label class="block text-sm font-medium mb-1">Nama Lengkap</label>
      <input name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-[#3A9BDC]" required>
      @error('name')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Email</label>
      <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-[#3A9BDC]" required>
      @error('email')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>
    <div>
      <label class="block text-sm font-medium mb-1">Pilih Acara</label>
      <select name="event_id" class="w-full border rounded px-3 py-2 focus:ring-2 focus:ring-[#3A9BDC]" required>
        <option value="">-- Pilih Acara --</option>
        @foreach($events as $ev)
          <option value="{{ $ev->id }}" @selected((int)($selected ?? 0) === $ev->id)>
            {{ $ev->name }} — {{ \Carbon\Carbon::parse($ev->date)->translatedFormat('d M Y') }}
          </option>
        @endforeach
      </select>
      @error('event_id')<p class="text-sm text-red-600 mt-1">{{ $message }}</p>@enderror
    </div>
    <div class="flex gap-3">
      <button class="bg-[#002B5B] hover:bg-[#3A9BDC] text-white font-semibold px-4 py-2 rounded transition-all duration-200">Kirim</button>
      <a href="{{ route('home') }}" class="px-4 py-2 border rounded">Batal</a>
    </div>
  </form>
</div>
@endsection
