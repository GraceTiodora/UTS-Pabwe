@extends('layouts.app')
@section('title','Daftar Peserta IT Del')
@section('content')
<div class="bg-white rounded-xl p-6 shadow-lg border-l-4 border-[#002B5B]">
  <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-3 mb-4">
    <div>
      <h2 class="text-2xl font-semibold text-[#002B5B]">Daftar Peserta Terdaftar</h2>
      <p class="text-sm text-gray-600">Semua data peserta tersimpan di database.</p>
    </div>
    <div class="flex gap-2">
      <a href="{{ route('participants.export.pdf') }}" class="px-4 py-2 border rounded hover:bg-gray-50">Unduh PDF</a>
      <a href="{{ route('home') }}" class="px-4 py-2 bg-[#002B5B] text-white rounded hover:bg-[#3A9BDC]">Kembali</a>
    </div>
  </div>

  <div class="overflow-x-auto">
    <table class="w-full text-sm border border-gray-200 rounded-lg overflow-hidden">
      <thead class="bg-[#002B5B] text-white">
        <tr>
          <th class="py-2 px-3">No</th>
          <th class="py-2 px-3">Nama</th>
          <th class="py-2 px-3">Email</th>
          <th class="py-2 px-3">Acara</th>
          <th class="py-2 px-3">Tanggal Daftar</th>
          <th class="py-2 px-3">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($participants as $i => $p)
          <tr class="border-b hover:bg-gray-50">
            <td class="py-2 px-3">{{ $i+1 }}</td>
            <td class="py-2 px-3 font-medium">{{ $p->name }}</td>
            <td class="py-2 px-3">{{ $p->email }}</td>
            <td class="py-2 px-3">{{ $p->event->name ?? '-' }}</td>
            <td class="py-2 px-3">{{ $p->created_at->format('d M Y H:i') }}</td>
            <td class="py-2 px-3">
              <form method="POST" action="{{ route('participants.destroy',$p) }}" onsubmit="return confirm('Hapus peserta ini?')">
                @csrf @method('DELETE')
                <button class="px-2 py-1 border rounded text-red-600 hover:bg-red-50">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="6" class="py-6 text-center text-gray-400">Belum ada peserta.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
