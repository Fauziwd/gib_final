@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="lg:w-full pr-4 pl-4 margin-tb">
                <div class="flex justify-center items-center">
                    <div class="bg-green-200 mb-10 rounded-lg px-10 w-1/2">
                        <h1 class="text-4xl font-bold text-center py-4">Edit Trip Penyaluran Dana</h1>
                    </div>
                </div>
                <div class="pull-right">
                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" href="{{ route('trip-penyaluran-dana.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="relative px-3 py-3 mb-4 border rounded bg-red-200 border-red-300 text-red-800">
                <strong>Error!</strong> Terdapat kesalahan dalam inputan:<br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('trip-penyaluran-dana.update', $tripPenyaluranDana->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="urutan_trip">Urutan Trip:</label>
                <input type="number" class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="urutan_trip" value="{{ $tripPenyaluranDana->urutan_trip }}" required>
            </div>

            <div class="mb-4">
                <label for="trip_id">Trip:</label>
                <select class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="trip_id" required>
                    @foreach ($daftarTrip as $trip)
                        <option value="{{ $trip->id }}" {{ $tripPenyaluranDana->trip_id == $trip->id ? 'selected' : '' }}>{{ $trip->nama_trip }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="pondok_id">Pondok:</label>
                <select class="block appearance-none w-full py-1 px-2 mb-1 text-base leading-normal bg-white text-gray-800 border border-gray-200 rounded" name="pondok_id" required>
                    @foreach ($pondok as $pondokItem)
                        <option value="{{ $pondokItem->id }}" {{ $tripPenyaluranDana->pondok_id == $pondokItem->id ? 'selected' : '' }}>{{ $pondokItem->nama_pondok }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600">Update</button>
        </form>
    </div>
@endsection
