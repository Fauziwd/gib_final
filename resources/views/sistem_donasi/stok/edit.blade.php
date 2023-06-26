@extends('layouts.app')
@include('layouts.navbar')


@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex justify-center items-center">
            <div class="bg-green-200 mb-10 rounded-lg px-10 w-1/2">
                <h1 class="text-4xl font-bold text-center py-4">Edit Pemasukan</h1>
            </div>
        </div>
            <form action="{{ route('stok.update', $stok->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="tanggal" class="block font-semibold">Tanggal</label>
                    <input type="date" name="tanggal" class="block w-full px-4 py-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $stok->tanggal }}" required>
                </div>
                <div class="mb-4">
                    <label for="dana_masuk" class="block font-semibold">Dana Masuk</label>
                    <input type="text" name="dana_masuk" class="block w-full px-4 py-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $stok->dana_masuk }}">
                </div>
                <div class="mb-4">
                    <label for="dana_keluar" class="block font-semibold">Dana Keluar</label>
                    <input type="text" name="dana_keluar" class="block w-full px-4 py-2 border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" value="{{ $stok->dana_keluar }}">
                </div>
                <div class="flex space-x-4">
                    <button type="submit" class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Simpan</button>
                    <a href="{{ route('stok.index') }}" class="inline-block px-4 py-2 text-gray-600 bg-gray-200 rounded hover:bg-gray-300">Kembali</a>
                </div>
            </form>
        </div>
    </div>
@endsection
