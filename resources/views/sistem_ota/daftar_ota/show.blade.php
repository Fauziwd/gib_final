@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container-ota mx-auto sm:px-4 border">
        <div class="flex flex-wrap">
            <div class="lg:w-full pr-4 pl-4 margin-tb">
                <div class="py-3 px-6 mb-0 bg-gray-ota border-b-ota border-gray-ota text-gray-900-ota">Detail OTA</div>
                <div class="flex-auto p-6">
                    <div class="pull-right-ota mb-2">
                        <a href="{{ route('daftar-ota.index') }}" class="inline-block-ota align-middle-ota text-center select-none-ota border-ota font-normal-ota whitespace-no-wrap-ota rounded-ota py-1-ota px-3-ota leading-normal-ota no-underline-ota bg-blue-600-ota text-white-ota hover:bg-blue-600-ota">Kembali</a>
                    </div>
                </div>
            </div>
        </div>

        <table class="w-full max-w-full mb-4 bg-transparent table-bordered-ota">
            <tr>
                <th class="w-1/5-ota">Nama:</th>
                <td>{{ $daftarOta->nama }}</td>
            </tr>
            <tr>
                <th>Jenis Kelamin:</th>
                <td>{{ $daftarOta->jenis_kelamin }}</td>
            </tr>
            <tr>
                <th>Pekerjaan:</th>
                <td>{{ $daftarOta->pekerjaan }}</td>
            </tr>
            <tr>
                <th>Alamat:</th>
                <td>{{ $daftarOta->alamat }}</td>
            </tr>
            <tr>
                <th>Nomor HP:</th>
                <td>{{ $daftarOta->nomor_hp }}</td>
            </tr>
            <tr>
                <th>Anggota:</th>
                <td>{{ $daftarOta->anggota->id }}</td>
            </tr>
        </table>
    </div>
@endsection
