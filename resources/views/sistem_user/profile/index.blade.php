@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<body class="bg-gray-100">
    <div class="container mx-auto mt-6">
        <h1 class="text-3xl font-bold">Anda Adalah Seorang {{ $user->name }}</h1>
        <p class="text-gray-500 mt-2">Informasi Pengguna</p>
        <ul class="mt-4 space-y-2">
            <li>
                <strong class="font-bold">Nama Lengkap:</strong>
                <span class="italic {{ $user->name ? 'text-black' : 'text-red-500' }}">
                    {{ $user->name?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Email:</strong>
                <span class="italic {{ $user->email ? 'text-black' : 'text-red-500' }}">
                    {{ $user->email ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Alamat:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->alamat_lengkap ? 'text-black' : 'text-red-500' }}">
                    {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->alamat_lengkap ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Jenis Kelamin:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->gender ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->gender ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Tempat, Tanggal Lahir:</strong>
                <span class="italic {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->tempat_lahir && $user->anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir ? 'text-black' : 'text-red-500' }}">
                    {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir ? $user->anggota->verifikasiCalonAnggota->calonAnggota->tempat_lahir . ', ' : '' }}
                    {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir ? '(' . \Carbon\Carbon::parse($user->anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir)->locale('id')->isoFormat('dddd') . ', ' . \Carbon\Carbon::parse($user->anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir)->locale('id')->isoFormat('D MMMM YYYY') . ')' : '(Anda mengosonginya)' }}
                </span>
            </li>                                              
            <li>
                <strong class="font-bold">Status:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->status ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->status ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Pekerjaan:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->pekerjaan ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->pekerjaan ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Nomor HP:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->no_hp ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->no_hp ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Organisasi yang Diikuti:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->organisasi_diikuti ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->organisasi_diikuti ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Tentang Paskas:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->tentang_paskas ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->tentang_paskas ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Pilar Paskas:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->pilar_paskas ? 'text-black' : 'text-red-500' }}">
                    {{ $user->anggota->verifikasiCalonAnggota->calonAnggota->pilar_paskas ?: '(Anda mengosonginya)' }}
                </span>
            </li>
            <li>
                <strong class="font-bold">Doa Harapan:</strong>
                <span class="italic {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->doa_harapan ? 'text-black' : 'text-red-500' }}">
                    {{  $user->anggota->verifikasiCalonAnggota->calonAnggota->doa_harapan ?: '(Anda mengosonginya)' }}
                </span>
            </li>
        </ul>
    </div>
    <div class="container mx-auto mt-6 text-right">
        <a href="{{ route('home') }}"
            class="inline-block px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Kembali</a>
    </div>
</body>

@endsection
