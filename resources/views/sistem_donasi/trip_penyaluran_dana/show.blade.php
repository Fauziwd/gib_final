@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto sm:px-4">
        <div class="flex flex-wrap ">
            <div class="lg:w-full pr-4 pl-4 margin-tb">
                <div class="pull-left">
                    <h2>Detail Trip Penyaluran Dana</h2>
                </div>
                <div class="pull-right">
                    <a class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" href="{{ route('trip-penyaluran-dana.index') }}">Kembali</a>
                </div>
            </div>
        </div>

        <div class="mb-4">
            <strong>Urutan Trip:</strong>
            {{ $tripPenyaluranDana->urutan_trip }}
        </div>

        <div class="mb-4">
            <strong>Trip:</strong>
            {{ $tripPenyaluranDana->daftarTrip->nama_trip }}
        </div>

        <div class="mb-4">
            <strong>Pondok:</strong>
            {{ $tripPenyaluranDana->pondok->calonMitra->nama_pondok }}
        </div>
    </div>
@endsection
