@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto sm:px-4 p-6 rounded">
        <div class="flex justify-center items-center">
            <div class="bg-green-200 mb-10 rounded-lg px-10 w-1/2">
                <h1 class="text-4xl font-bold text-center py-4">Form Edit Calon Mitra</h1>
            </div>
        </div>

        <form action="{{ route('calon-mitra.update', $calonMitra->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="container mx-auto sm:px-4 border mt-4 mb-4 p-6 rounded">
                <div class="border mt-5 mb-3 p-2 bg-gray-200 rounded">
                    <h3 class="text-2xl font-bold text-center py-4">Identitas Pondok</h3>
                </div>
                <div>
                     <label class="font-bold" for="nama_pondok">Nama Pondok:</label>
                    <input type="text" name="nama_pondok" id="nama_pondok" value="{{ $calonMitra->nama_pondok }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('nama_pondok')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="alamat">Alamat:</label>
                    <textarea name="alamat" id="alamat" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>{{ $calonMitra->alamat }}</textarea>
                    @error('alamat')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="tanggal_berdiri">Tanggal Berdiri:</label>
                    <input type="date" name="tanggal_berdiri" id="tanggal_berdiri"
                        value="{{ $calonMitra->tanggal_berdiri }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('tanggal_berdiri')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container mx-auto sm:px-4 border mt-4 mb-4 p-6 rounded">
                <div class="border mt-5 mb-3 p-2 bg-gray-200 rounded">
                    <h3 class="text-2xl font-bold text-center py-4">Kepengurusan Pondok</h3>
                </div>

                <div>
                     <label class="font-bold" for="nama_pimpinan">Nama Pimpinan:</label>
                    <input type="text" name="nama_pimpinan" id="nama_pimpinan"
                        value="{{ $calonMitra->nama_pimpinan }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('nama_pimpinan')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="profesi">Profesi Pimpinan:</label>
                    <input type="text" name="profesi" id="profesi" value="{{ $calonMitra->profesi }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('profesi')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="alamat_pimpinan">Alamat Pimpinan:</label>
                    <textarea name="alamat_pimpinan" id="alamat_pimpinan" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>{{ $calonMitra->alamat_pimpinan }}</textarea>
                    @error('alamat_pimpinan')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="no_hp_pimpinan">No. HP Pimpinan:</label>
                    <input type="text" name="no_hp_pimpinan" id="no_hp_pimpinan"
                        value="{{ $calonMitra->no_hp_pimpinan }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('no_hp_pimpinan')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_pengurus_menetap">Jumlah Pengurus Menetap:</label>
                    <input type="number" name="jumlah_pengurus_menetap" id="jumlah_pengurus_menetap"
                        value="{{ $calonMitra->jumlah_pengurus_menetap }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_pengurus_menetap')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_pengurus_tidak_menetap">Jumlah Pengurus Tidak Menetap:</label>
                    <input type="number" name="jumlah_pengurus_tidak_menetap" id="jumlah_pengurus_tidak_menetap"
                        value="{{ $calonMitra->jumlah_pengurus_tidak_menetap }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_pengurus_tidak_menetap')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container mx-auto sm:px-4 border mt-4 mb-4 p-6 rounded">
                <div class="border mt-5 mb-3 p-2 bg-gray-200 rounded">
                    <h3 class="text-2xl font-bold text-center py-4">Keterangan Anak Asuh</h3>
                </div>
                <div>
                     <label class="font-bold" for="jumlah_yatim_piatu">Jumlah Yatim Piatu:</label>
                    <input type="number" name="jumlah_yatim_piatu" id="jumlah_yatim_piatu"
                        value="{{ $calonMitra->jumlah_yatim_piatu }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_yatim_piatu')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_dhuafa">Jumlah Dhuafa:</label>
                    <input type="number" name="jumlah_dhuafa" id="jumlah_dhuafa" value="{{ $calonMitra->jumlah_dhuafa }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_dhuafa')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_dll">Jumlah DLL:</label>
                    <input type="text" name="jumlah_dll" id="jumlah_dll" value="{{ $calonMitra->jumlah_dll }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="tulis dengan format, misal -> fakir: 12 ; jika tidak ada maka tulis : 0" required>
                    @error('jumlah_dll')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_tk">Jumlah TK:</label>
                    <input type="number" name="jumlah_tk" id="jumlah_tk" value="{{ $calonMitra->jumlah_tk }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_tk')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_sd">Jumlah SD:</label>
                    <input type="number" name="jumlah_sd" id="jumlah_sd" value="{{ $calonMitra->jumlah_sd }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_sd')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_smp">Jumlah SMP:</label>
                    <input type="number" name="jumlah_smp" id="jumlah_smp" value="{{ $calonMitra->jumlah_smp }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_smp')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_sma">Jumlah SMA:</label>
                    <input type="number" name="jumlah_sma" id="jumlah_sma" value="{{ $calonMitra->jumlah_sma }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_sma')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="jumlah_kuliah">Jumlah Kuliah:</label>
                    <input type="number" name="jumlah_kuliah" id="jumlah_kuliah" value="{{ $calonMitra->jumlah_kuliah }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('jumlah_kuliah')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container mx-auto sm:px-4 border mt-4 mb-4 p-6 rounded">
                <div class="border mt-5 mb-3 p-2 bg-gray-200 rounded">
                    <h3 class="text-2xl font-bold text-center py-4">Kondisi Pondok</h3>
                </div>
                <div>
                     <label class="font-bold" for="status_milik_tanah">Status Milik Tanah:</label>
                    <input type="text" name="status_milik_tanah" id="status_milik_tanah"
                        value="{{ $calonMitra->status_milik_tanah }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('status_milik_tanah')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="luas_tanah">Luas Tanah:</label>
                    <input type="text" name="luas_tanah" id="luas_tanah" value="{{ $calonMitra->luas_tanah }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('luas_tanah')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="keterangan_fasilitas">Keterangan Fasilitas:</label>
                    <textarea name="keterangan_fasilitas" id="keterangan_fasilitas" rows="3" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ $calonMitra->keterangan_fasilitas }}</textarea>
                    @error('keterangan_fasilitas')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                     <label class="font-bold" for="sumber_air">Sumber Air:</label>
                    <input type="text" name="sumber_air" id="sumber_air" value="{{ $calonMitra->sumber_air }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('sumber_air')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="container mx-auto sm:px-4 border mt-4 mb-4 p-6 rounded">
                <div class="border mt-5 mb-3 p-2 bg-gray-200 rounded">
                    <h3 class="text-2xl font-bold text-center py-4">Penilaian Surveyor</h3>
                </div>
                <div>
                     <label class="font-bold" for="tingkat_layak">Tingkat Layak:</label>
                    <input type="text" name="tingkat_layak" id="tingkat_layak" value="{{$calonMitra->tingkat_layak  }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                    @error('tingkat_layak')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                     <label class="font-bold" for="prioritas">Prioritas:</label>
                    <input type="text" name="prioritas" id="prioritas" value="{{ $calonMitra->prioritas  }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="pilih antara : prioritas, tidak prioritas" required>
                    @error('prioritas')
                        <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="">
                <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Update</button>
                <a href="{{ route('calon-mitra.index') }}" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-600 text-white hover:bg-gray-700">Kembali</a>
            </div>
        </form>
    </div>
@endsection