@extends('layouts.app')
@include('layouts.navbar')

@section('content')
<div class="container mx-auto sm:px-4 border rounded" enctype="multipart/form-data">
  <br>
  <div class="container mx-auto sm:px-4 border w-1/2 rounded p-2">
    <h1 class="text-center text-2xl font-bold">FORM User Baru</h1>
  </div>
  <form action="{{ route('user.update', $user->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="mb-4">
      <label for="name" class="block text-gray-800 font-bold">Username</label>
      <input type="text" name="name" id="name" class="block w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" value="{{ $user->name }}" required>
    </div>

    <div class="mb-4">
      <label for="peran_id" class="block text-gray-800 font-bold">Peran</label>
      <select name="peran_id" class="block w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded">
        
        @foreach ($peran as $p)
        <option value="{{ $p->id }}" {{ $p->id == $user->peran_id ? 'selected' : '' }}>
          {{ $p->peran }}
        </option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
      <label for="photo"></label>
      <input type="file" class="form-control-file" id="photo" name="photo">
  </div>
    <button type="submit" class="inline-block mt-4 py-2 px-4 text-white bg-blue-600 rounded hover:bg-blue-700">Simpan</button>
    <a href="{{ route('user.index') }}" class="inline-block mt-4 py-2 px-4 ml-2 text-white bg-gray-600 rounded hover:bg-gray-700">Kembali</a>
  </form>
</div>
@endsection










{{-- <br>
<div class="mb-4">
    <label for="email">Akun</label>
    <select name="email" id="email" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" required>
        <option value="">Pilih Nama & Email Anggota</option>
        @foreach ($anggota as $a)
            <option value="{{ $a->verifikasiCalonAnggota->calonAnggota->email }}" {{ $a->verifikasiCalonAnggota->calonAnggota->email == $user->email ? 'selected' : '' }}>
                <b>NAMA</b> : {{ $a->verifikasiCalonAnggota->calonAnggota->nama_lengkap }} ### EMAIL : {{ $a->verifikasiCalonAnggota->calonAnggota->email }}
            </option>
        @endforeach
    </select>
</div>
<br>
<div class="mb-4">
    <label for="anggota_id">Konfirmasi Email</label>
    <select name="anggota_id" id="anggota_id" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" required>
        <option value="">Pilih Email Dari Akun</option>
        @foreach ($anggota as $a)
            <option value="{{ $a->id }}" {{ $a->verifikasiCalonAnggota->calonAnggota->email == $user->email ? 'selected' : '' }}>
                {{ $a->verifikasiCalonAnggota->calonAnggota->email }}
            </option>
        @endforeach
    </select>
</div>
<br> --}}
{{-- <div class="mb-4">
    <label for="password">Password</label>
    <input type="password" name="password" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" required>
</div>
<br> --}}