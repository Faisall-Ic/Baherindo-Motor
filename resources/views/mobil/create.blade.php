@extends('layouts.main')
@section('title','Mobil Create')

@section('content')
<div class="mt-40 mb-47">
    <form action="{{ route('mobil.store')}}" method="POST" enctype="multipart/form-data" class="max-w-sm mx-auto">
        @csrf
        <div class="mb-2">
            <label for="nama_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Mobil</label>
            <input type="text" name="nama_mobil" id="nama_mobil" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
        </div>
        <div class="mb-2">
            <label for="harga_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Harga Mobil</label>
            <input type="text" name="harga_mobil" id="harga_mobil" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
        </div>
        <div class="mb-2">
            <label for="kilometer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kilo Meter</label>
            <input type="text" name="kilo_mobil" id="kilo_mobil" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
        </div>
        <div class="mb-2">
            <label for="tahun_mobil" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Mobil</label>
            <input type="text" name="tahun_mobil" id="tahun_mobil" class="shadow-xs bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-xs-light" required />
        </div>
        <div class="mb-5">
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="foto_mobil">Upload Foto Mobil</label>
            <input type="file" name="foto_mobil" id="foto_mobil" accept=".jpg,.jpeg,.png" class="flex justify-center items-center w-full px-3 py-3 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="user_avatar_help">
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>
</div>
@endsection