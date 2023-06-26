@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto sm:px-4">
        <h1>Detail User</h1>

        <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
            <div class="flex-auto p-6">
                <h5 class="mb-0 block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded">Username : {{ $user->name }}</h5>
                <p class="mb-0 block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded">Peran : <b>{{ $user->peran->peran }}</b></p>
                <hr>
                <h5 class="mb-0 block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded">Nama : {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->nama_lengkap }}</h5>             
                <h5 class="mb-0 block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded">Email : {{ $user->email }}</h5>
                <hr>  
                <p class="mb-0">Terdaftar pada : {{ $user->created_at }}</p>
            </div>
        </div>

        <a href="{{ route('user.index') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-600 text-white hover:bg-gray-700 mt-3">Kembali</a>
    </div>
@endsection
