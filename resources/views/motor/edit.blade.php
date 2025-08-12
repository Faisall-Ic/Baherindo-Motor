@extends('Layouts.main')

@section('title', 'Edit Motor')

@section('content')
<div class="max-w-3xl mx-auto px-8 py-12 bg-white rounded-2xl shadow-md border border-gray-200 mt-5 mb-16">
  <h1 class="text-3xl font-bold text-indigo-700 mb-10 text-center">Edit Motor</h1>

  <form action="{{ route('motor.update', $motor->id) }}" method="POST" enctype="multipart/form-data" class="space-y-8">
    @csrf
    @method('PUT')

    <div>
      <label for="nama_motor" class="block text-sm font-semibold text-gray-700 mb-2">Nama Motor</label>
      <input type="text" id="nama_motor" name="nama_motor" required
             value="{{ old('nama_motor', $motor->nama_motor) }}"
             placeholder="Nama Motor"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="harga_motor" class="block text-sm font-semibold text-gray-700 mb-2">Harga (Rp)</label>
      <input type="number" id="harga_motor" name="harga_motor" required
             value="{{ old('harga_motor', $motor->harga_motor) }}"
             placeholder="Harga"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="tahun_motor" class="block text-sm font-semibold text-gray-700 mb-2">Tahun</label>
      <input type="number" id="tahun_motor" name="tahun_motor" required
             value="{{ old('tahun_motor', $motor->tahun_motor) }}"
             placeholder="Tahun"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="km_motor" class="block text-sm font-semibold text-gray-700 mb-2">Kilometer (KM)</label>
      <input type="number" id="km_motor" name="km_motor" required
             value="{{ old('km_motor', $motor->kilo_motor) }}"
             placeholder="Kilometer"
             class="w-full rounded-lg border border-gray-300 px-4 py-3 text-base shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
    </div>

    <div>
      <label for="foto_motor" class="block text-sm font-semibold text-gray-700 mb-2">Foto Motor</label>
      <input type="file" id="foto_motor" name="foto_motor"
             class="w-full rounded-lg border border-gray-300 px-4 py-2 shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition" />
      @if($motor->foto_motor)
        <div class="mt-4 flex justify-center">
          <img src="{{ asset('storage/' . $motor->foto_motor) }}" alt="Foto Motor" class="w-36 h-36 object-cover rounded-lg shadow-md border border-gray-300" />
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