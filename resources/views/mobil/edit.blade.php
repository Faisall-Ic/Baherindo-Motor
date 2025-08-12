@extends('Layouts.main')

@section('title', 'Edit Mobil')

@section('content')
<div class="max-w-3xl mx-auto px-8 py-12 bg-white rounded-2xl shadow-md border border-gray-200 mt-5 mb-16">
  <h1 class="text-3xl font-bold text-indigo-700 mb-10 text-center">Edit mobil</h1>

  <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
    @csrf
    @method('PUT')

    <div>
      <label for="nama_mobil" class="block text-sm font-semibold text-gray-700 mb-2">Nama mobil</label>
      <input type="text" id="nama_mobil" name="nama_mobil" required
             value="{{ old('nama_mobil', $mobil->nama_mobil) }}"
             placeholder="Nama Mobil"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="harga_mobil" class="block text-sm font-semibold text-gray-700 mb-2">Harga (Rp)</label>
      <input type="number" id="harga_mobil" name="harga_mobil" required
             value="{{ old('harga_mobil', $mobil->harga_mobil) }}"
             placeholder="Harga"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="tahun_mobil" class="block text-sm font-semibold text-gray-700 mb-2">Tahun</label>
      <input type="number" id="tahun_mobil" name="tahun_mobil" required
             value="{{ old('tahun_mobil', $mobil->tahun_mobil) }}"
             placeholder="Tahun"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="kilo_mobil" class="block text-sm font-semibold text-gray-700 mb-2">Kilometer (kilo)</label>
      <input type="number" id="kilo_mobil" name="kilo_mobil" required
             value="{{ old('kilo_mobil', $mobil->kilo_mobil) }}"
             placeholder="Kilometer"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="foto_mobil" class="block text-sm font-semibold text-gray-700 mb-2">Foto mobil</label>
      <input type="file" id="foto_mobil" name="foto_mobil"
             class="w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
      @if($mobil->foto_mobil)
        <div class="mt-4 flex justify-center">
          <img src="{{ asset('storage/' . $mobil->foto_mobil) }}" alt="Foto mobil" class="w-36 h-36 object-cover rounded-lg shadow-md border border-gray-300" />
        </div>
      @endif
    </div>

    <div class="pt-6 flex justify-center">
      <button type="submit"
              class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold px-8 py-3 rounded-lg shadow-md transition transform hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-indigo-400">
        Simpan Perubahan
      </button>
    </div>
  </form>
</div>
@endsection