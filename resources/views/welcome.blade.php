@extends('layouts.main')
@section('title','Baherindo Motor')

@section('content')

    <div class="flex flex-wrap justify-center items-center gap-10 mt-10">
        @foreach ($motor as $m)
            <div class="w-full max-w-sm h-100 bg-white rounded-lg shadow-md hover:shadow-xl duration-300">
                <a href="#" class="h-200">
                    <img class="w-110 p-8 rounded-lg m-auto" src="{{ $m['foto'] }}" alt="product image" />
                </a>
                <div class="px-8 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$m['nama']}}</h5>
                    </a>
                    <div class="flex items-center mt-1 mb-1">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <h3 class="text-gray-600">{{ $m['kilo'] }} km</h3>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-2xl font-bold text-gray-900 dark:text-white">Rp {{ $m['harga'] }}</span>
                        <span class="text-lg font-semibold pe-5">{{ $m['tahun'] }}</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
