@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex justify-center items-center">
            <div class="bg-purple-200 dark:bg-blue-900 dark:text-white mb-10 rounded-lg px-10 w-1/2">
                <h1 class="text-4xl font-bold text-center py-4">Form Edit Calon Anggota</h1>
            </div>
        </div>

        <form action="{{ route('calon-anggota.update', $calonAnggota->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="email" class="block text-lg font-bold text-gray-800 mb-2">Email</label>
                <input type="email" name="email"
                    class="block w-full py-2 px-3 mb-3 text-base text-gray-800 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                    value="{{ $calonAnggota->email }}" required>
            </div>

            <div class="mb-4">
                <label for="nama_lengkap" class="block text-lg font-bold text-gray-800 mb-2">Nama Lengkap</label>
                <input type="text" name="nama_lengkap"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->nama_lengkap }}" required>
            </div>
            <br>
            <div class="mb-4">
                <label for="gender" class="block text-lg font-bold text-gray-800 mb-2">Jenis Kelamin</label>
                <select name="gender"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    required>
                    <option value="Laki-Laki" {{ $calonAnggota->gender == 'Laki-Laki' ? 'selected' : '' }}>Laki-Laki
                    </option>
                    <option value="Perempuan" {{ $calonAnggota->gender == 'Perempuan' ? 'selected' : '' }}>Perempuan
                    </option>
                </select>
            </div>
            <br>
            <div class="mb-4">
                <label for="tempat_lahir" class="block text-lg font-bold text-gray-800 mb-2">Tempat Lahir</label>
                <input type="text" name="tempat_lahir"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->tempat_lahir }}" required>
            </div>
            <br>
            <div class="mb-4">
                <label for="tanggal_lahir" class="block text-lg font-bold text-gray-800 mb-2">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->tanggal_lahir }}" required>
            </div>
            <br>
            <div class="mb-4">
                <label for="alamat_lengkap" class="block text-lg font-bold text-gray-800 mb-2">Alamat Lengkap</label>
                <textarea name="alamat_lengkap"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    required>{{ $calonAnggota->alamat_lengkap }}</textarea>
            </div>
            <br>
            <div class="mb-4">
                <label for="status" class="block text-lg font-bold text-gray-800 mb-2">Status</label>
                <select name="status"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    required>
                    <option value="Menikah" {{ $calonAnggota->status == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                    <option value="Belum Menikah" {{ $calonAnggota->status == 'Belum Menikah' ? 'selected' : '' }}>Belum
                        Menikah</option>
                    <option value="Janda" {{ $calonAnggota->status == 'Janda' ? 'selected' : '' }}>Janda</option>
                    <option value="Duda" {{ $calonAnggota->status == 'Duda' ? 'selected' : '' }}>Duda</option>
                </select>
            </div>
            <br>
            <div class="mb-4">
                <label for="pekerjaan" class="block text-lg font-bold text-gray-800 mb-2">Pekerjaan</label>
                <input type="text" name="pekerjaan"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->pekerjaan }}" required>
            </div>
            <br>
            <div class="mb-4">
                <label for="no_hp" class="block text-lg font-bold text-gray-800 mb-2">No.Telp / WA</label>
                <input type="text" name="no_hp"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->no_hp }}" required>
            </div>
            <br>
            <div class="mb-4">
                <label for="organisasi_diikuti" class="block text-lg font-bold text-gray-800 mb-2">Organisasi
                    Diikuti</label>
                <input type="text" name="organisasi_diikuti"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->organisasi_diikuti }}" required>
            </div>
            <br>
            <div class="mb-4">
                <label for="tentang_paskas" class="block text-lg font-bold text-gray-800 mb-2">Tentang PASKAS</label>
                <input type="text" name="tentang_paskas"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->tentang_paskas }}" required>
            </div>
            <br>
            <div class="mb-4">
                <input type="checkbox" name="pilar_paskas" class=""
                    {{ $calonAnggota->pilar_paskas ? 'checked' : '' }}>
                <label for="pilar_paskas" style="display:inline" value="siap">Konfirmasi Kesanggupan untuk melaksanakan
                    pilar dakwah PASKAS (Birrul Walidain, Membaca Al Qur'an 1 hari 1 halaman, Sholat Tepat Awal Waktu dan
                    Infaq minimal 25.000 sebulan) </label>
            </div>
            <br>
            <div class="mb-4">
                <label for="doa_harapan" class="block text-lg font-bold text-gray-800 mb-2">Do'a & Harapan</label>
                <input type="text" name="doa_harapan"
                    class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded"
                    value="{{ $calonAnggota->doa_harapan }}" required>
            </div>

            <button type="submit"
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 mb-5 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Simpan</button>
            <a href="{{ route('calon-anggota.index') }}"
                class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded mb-5 py-1 px-3 leading-normal no-underline bg-gray-600 text-white hover:bg-gray-700">Kembali</a>
        </form>
    </div>
@endsection
