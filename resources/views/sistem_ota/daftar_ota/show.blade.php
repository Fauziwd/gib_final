@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container-ota mx-auto sm:px-4 border">
        <div class="flex flex-wrap">
            <div class="lg:w-full pr-4 pl-4 margin-tb">
                <div class="flex justify-center items-center">
                    <div class="bg-purple-200 dark:bg-blue-900 dark:text-white mb-10 rounded-lg px-10 w-1/2">
                        <h1 class="text-4xl font-bold text-center py-4">Detail OTA</h1>
                    </div>
                </div>
            </div>
        </div>

        <table class="w-full max-w-full shadow-lg bg-transparent table-bordered-ota">
            <tr class="text-left">
                <th class="bg-green-400 hover:bg-green-600 rounded-tl-lg" class="w-1/5-ota">Nama:</th>
                <td class="rounded-tr-lg">{{ $daftarOta->nama }}</td>
            </tr>
            <tr class="text-left">
                <th class="bg-green-400 hover:bg-green-600">Jenis Kelamin:</th>
                <td>{{ $daftarOta->jenis_kelamin }}</td>
            </tr>
            <tr class="text-left">
                <th class="bg-green-400 hover:bg-green-600">Pekerjaan:</th>
                <td>{{ $daftarOta->pekerjaan }}</td>
            </tr>
            <tr class="text-left">
                <th class="bg-green-400 hover:bg-green-600">Alamat:</th>
                <td>{{ $daftarOta->alamat }}</td>
            </tr>
            <tr class="text-left">
                <th class="bg-green-400 hover:bg-green-600">Nomor HP:</th>
                <td>{{ $daftarOta->nomor_hp }}</td>
            </tr>
            <tr class="text-left">
                <th class="bg-green-400 hover:bg-green-600 rounded-bl-lg">Anggota:</th>
                <td class="rounded-br-lg">{{ $daftarOta->anggota->verifikasiCalonAnggota->calonAnggota->nama_lengkap }}</td>
            </tr>
        </table>

        <div class="mt-3 mb-3">
            <a href="{{ route('daftar-ota.index') }}"
                class="inline-block-ota align-middle-ota text-center select-none-ota shadow-lg border-ota font-normal-ota whitespace-no-wrap-ota rounded-ota py-1-ota px-3-ota leading-normal-ota no-underline-ota bg-blue-600-ota text-white-ota hover:bg-blue-800-ota">Kembali</a>
        </div>
    </div>
@endsection
