@extends('layouts.main')
@section('title','Osis mobil')

@section('content')
<div class="flex flex-wrap justify-center items-center gap-10 mt-20">
    @foreach ($mobil as $m)
    <a href="{{ route('mobil.show', $m->id) }}">
            <div class="w-full max-w-sm bg-white rounded-lg shadow-md hover:shadow-xl hover:-translate-1.5 duration-300"> 
                <span>
                        <img class="w-110 p-8 rounded-lg m-auto" src="{{ asset('storage/' .$m['foto_mobil']) }}" alt="product image" />
                    </span>
                    
                    <div class="px-8 pb-5">
                        <a href="#">
                            <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ 'Rp ' . number_format($m['harga_mobil'], 0, ',', '.') . ',00' }}</h5>
                        </a>
                        <div class="flex items-center mt-1 mb-1">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse">
                                <h3 class="text-gray-600">{{ $m['kilo_mobil'] }} km</h3>
                            </div>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="text-2xl font-bold text-gray-900 dark:text-white">{{ $m['nama_mobil'] }}</span>
                            <span class="text-lg font-semibold pe-5">{{ $m['tahun_mobil'] }}</span>
                        </div>
                    </div>
                </div>
            </a>  
                @endforeach
            </div>
            @endsection
