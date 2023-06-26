@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="container mx-auto sm:px-4 p-6 rounded">
    <h1 class="text-3xl font-bold mb-6 text-center">Detail Calon Anggota</h1>

    <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
        <table class="w-full  text-left">
            <tr>
                <th class="py-2 px-4 border-b  bg-gray-500 text-white">ID</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->id }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Email</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->email }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Nama Lengkap</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->nama_lengkap }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Jenis Kelamin</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->gender }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Tempat Lahir</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->tempat_lahir }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Tanggal Lahir</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->tanggal_lahir }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Alamat Lengkap</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->alamat_lengkap }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Status</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->status }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Pekerjaan</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->pekerjaan }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Nomor HP/WA</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->no_hp }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Organisasi Diikuti</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->organisasi_diikuti }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Tentang Paskas</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->tentang_paskas }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Pilar PASKAS</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->pilar_paskas }}</td>
            </tr>
            <tr>
                <th class="py-2 px-4 border-b bg-gray-500 text-white">Do'a dan Harapan</th>
                <td class="py-2 px-4 border-b">{{ $calonAnggota->doa_harapan }}</td>
            </tr>
        </table>
    </div>

    <a href="{{ route('calon-anggota.index') }}" class="inline-block mt-4 px-4 py-2 text-white bg-blue-500 rounded hover:bg-blue-600">Kembali</a>
</div>
@endsection
