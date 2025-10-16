@extends('layouts.app')
@section('title','Daftar Event IT Del')
@section('content')

<div class="bg-gradient-to-r from-[#002B5B] to-[#3A9BDC] text-white rounded-xl shadow-lg p-10 mb-10 text-center">
  <h1 class="text-3xl font-bold mb-2">Portal Pendaftaran Acara IT Del</h1>
  <p class="text-gray-100">Temukan berbagai seminar, workshop, dan kegiatan kampus terkini!</p>
  <a href="{{ route('register.create') }}" class="mt-4 inline-block px-5 py-2 bg-white text-[#002B5B] font-semibold rounded hover:bg-gray-100">
    Daftar Sekarang
  </a>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
  @forelse ($events as $ev)
    <article class="bg-white rounded-xl p-5 shadow-md hover:shadow-lg transition-shadow duration-200 border-t-4 border-[#002B5B]">
      <h3 class="text-lg font-bold text-[#002B5B]">{{ $ev->name }}</h3>
      <p class="text-sm text-gray-600 mt-1">📅 {{ \Carbon\Carbon::parse($ev->date)->translatedFormat('d M Y') }}</p>
      <p class="text-sm text-gray-600">📍 {{ $ev->location }}</p>
      <div class="mt-4 text-right">
        <a href="{{ route('register.create', ['event_id'=>$ev->id]) }}" class="px-3 py-2 text-sm bg-[#3A9BDC] text-white rounded hover:bg-[#2579C0]">
          Daftar
        </a>
      </div>
    </article>
  @empty
    <p class="text-center col-span-3 text-gray-500">Belum ada event.</p>
  @endforelse
</div>
@endsection
