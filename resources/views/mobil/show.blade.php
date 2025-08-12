@extends('Layouts.main')

@section('title', 'Detail Mobil - ' . $mobil->nama_mobil)

@section('content')
<div class="bg-gray-50 min-h-screen flex justify-center items-center p-6">

    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden w-full max-w-4xl shadow-lg transform transition duration-300 hover:shadow-2xl hover:-translate-y-1">

        <!-- Judul -->
        <div class="p-5 border-b border-gray-200">
            <h2 class="text-3xl font-bold text-gray-800 tracking-tight">{{ $mobil->nama_mobil }}</h2>
        </div>

        <!-- Foto mobil -->
        <div class="bg-gray-100 overflow-hidden">
            <img src="{{ asset('storage/' . $mobil->foto_mobil) }}" 
                 alt="Foto mobil" 
                 class="w-full h-80 object-cover transform transition duration-500 hover:scale-105">
        </div>

        <!-- Detail -->
        <div class="p-6">
            <div>
                <h3 class="text-lg font-medium text-gray-600">Details</h3>
                <p class="text-2xl font-bold text-gray-900">
                    Rp. {{ number_format($mobil->harga_mobil, 0, ',', '.') }}
                </p>
            </div>
            <p class="text-gray-600">Tahun: {{ $mobil->tahun_mobil }}</p>
            <p class="text-gray-600 mb-3">Kilometer: {{ number_format($mobil->km_mobil, 0, ',', '.') }} KM</p>

            <!-- Tombol WhatsApp -->
            <button type="button" onclick="openPopup('whatsapp')" 
               class="block w-full text-center bg-green-600 hover:bg-green-700 text-white font-medium py-3 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                <i class="fab fa-whatsapp text-lg"></i> Order via WhatsApp
            </button>

            <!-- Tombol Edit & Delete -->
            <div class="flex gap-3 pt-2">
                <a href="{{ route('mobil.edit', $mobil->id) }}" 
                   class="flex-1 text-center bg-gray-800 hover:bg-gray-700 text-white font-medium py-3 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                    Edit
                </a>
                <form action="{{ route('mobil.destroy', $mobil->id) }}" method="POST" class="flex-1" id="deleteForm">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="openPopup('delete')" class="w-full bg-red-600 hover:bg-red-700 text-white font-medium py-3 rounded-lg transition duration-300 transform hover:scale-[1.02]">
                        Delete
                    </button>
                </form>
            </div>
        </div>

    </div>
</div>

<!-- Popup -->
<div id="popup" class="hidden fixed inset-0 bg-black/50 backdrop-blur-sm z-50 flex justify-center items-center">
    <div class="bg-white rounded-lg p-6 max-w-sm w-full shadow-xl text-center">
        <h3 id="popupTitle" class="text-lg font-semibold text-gray-800 mb-4"></h3>
        <p id="popupMessage" class="text-gray-600 mb-6"></p>
        <div class="flex gap-3 justify-center">
            <button id="popupCancel" class="px-4 py-2 bg-gray-200 rounded-md hover:bg-gray-300">Batal</button>
            <a id="popupConfirm" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 cursor-pointer">Ya</a>
        </div>
    </div>
</div>

<script>
function openPopup(type) {
    const popup = document.getElementById('popup');
    const title = document.getElementById('popupTitle');
    const message = document.getElementById('popupMessage');
    const confirmBtn = document.getElementById('popupConfirm');

    if (type === 'whatsapp') {
        title.textContent = 'Konfirmasi Order';
        message.textContent = 'Anda akan diarahkan ke WhatsApp untuk memesan mobil ini.';
        confirmBtn.onclick = function() {
            window.location.href = "https://wa.me/6287797895571?text=Halo,%20saya%20tertarik%20dengan%20{{ rawurlencode($mobil->nama_mobil) }}";
        };
    } 
    else if (type === 'delete') {
        title.textContent = 'Hapus mobil';
        message.textContent = 'Yakin ingin menghapus mobil ini? Tindakan ini tidak bisa dibatalkan.';
        confirmBtn.onclick = function() {
            document.getElementById('deleteForm').submit();
        };
    }

    popup.classList.remove('hidden');
}

document.getElementById('popupCancel').onclick = function() {
    document.getElementById('popup').classList.add('hidden');
};
</script>
@endsection
