@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="">
        <div class="flex flex-wrap ">
            <div class="md:w-2/3 pr-4 pl-4 md:mx-1/5">
                <div class="relative flex flex-col min-w-0 rounded break-words border bg-white border-1 border-gray-300">
                    <div class="py-3 px-6 mb-0 bg-gray-200 border-b-1 border-gray-300 text-gray-900">Detail Anggota</div>
                    <div class="flex-auto p-6">
                        <table class="w-full max-w-full mb-4 bg-transparent text-left">
                            <tbody>
                                <tr>
                                    <th>Anggota ID</th>
                                    <td>{{ $anggota->id}}</td>
                                </tr>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->nama_lengkap}}</td>
                                </tr>
                                <!-- Tambahkan kolom lain yang ingin ditampilkan -->
                                <tr>
                                    <th>Email</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->email}}</td>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->gender}}</td>
                                </tr>
                                <tr>
                                    <th>Tempat Lahir</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->tempat_lahir}}</td>
                                </tr>
                                <tr>
                                    <th>Tanggal Lahir</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->tanggal_lahir}}</td>
                                </tr>
                                <tr>
                                    <th>Alamat Lengkap</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->alamat_lengkap}}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->status}}</td>
                                </tr>
                                <tr>
                                    <th>Pekerjaan</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->pekerjaan}}</td>
                                </tr>
                                <tr>
                                    <th>Nomor HP/ WA</th>
                                    <td>{{ $anggota->verifikasiCalonAnggota->calonAnggota->no_hp}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="{{ route('anggota.index') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-600 text-white hover:bg-gray-700">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
