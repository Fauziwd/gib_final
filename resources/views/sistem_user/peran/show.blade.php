@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex justify-center items-center">
            <div class="bg-green-200 mb-10 rounded-lg px-10 w-1/2">
                <h1 class="text-4xl font-bold text-center py-4">Anggota Paskas</h1>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
              <thead class="bg-gray-100">
                <tr>
                  <th class="py-3 px-6 text-left text-gray-700 font-semibold">Peran</th>
                  <th class="py-3 px-6 text-left text-gray-700 font-semibold">Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="py-4 px-6 border-b border-gray-200">{{ $peran->peran }}</td>
                  <td class="py-4 px-6 border-b border-gray-200">{{ $peran->keterangan }}</td>
                </tr>
              </tbody>
            </table>
          </div>          

        <a href="{{ route('peran.index') }}" class="inline-block mt-3 align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-gray-600 text-white hover:bg-gray-700">Kembali</a>
    </div>
@endsection
