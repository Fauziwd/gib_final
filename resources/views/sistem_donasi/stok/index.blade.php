@extends('layouts.app')
@include('layouts.navbar')

@section('content')
    <div class="container mx-auto h-screen sm:px-4">
        <div class="flex justify-center items-center">
            <div class="bg-green-200 mb-10 rounded-lg px-10 w-1/2 shadow-lg">
                <h1 class="text-4xl font-bold text-center py-4">Daftar Pemasukan Beras</h1>
            </div>
        </div>
        <div class="mt-10 mb-6">
            <a href="{{ route('stok.create') }}" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Tambah Catatan Pemasukan</a>
        </div>

         <!-- Tampilkan pesan sukses jika ada -->
         @if ($message = Session::get('success'))
         <div id="success-message" class="relative px-3 py-3 mb-4 border rounded bg-green-200 border-green-300 text-green-800">
             <p>{{ $message }}</p>
         </div>
     
         <script>
             setTimeout(function() {
                 document.getElementById('success-message').remove();
             }, 4000);
         </script>
     @endif

     {{-- ======= Drop Down Filter ====== --}}

     <div class="dropdown mb-5">
        <button id="dropdownTanggal" data-dropdown-toggle="dropdownDivider" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
          Filter Catatan <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
        </button>
        <div id="dropdownDivider" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg w-44 dark:bg-gray-700 dark:divide-gray-600 mt-6 shadow-2xl backdrop-filter backdrop-blur-lg bg-opacity-50">
          <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTanggal">
            <li>
              <a href="{{ route('stok.index', ['sort' => 'asc']) }}" class="block px-4 py-2 hover:bg-blue-300 dark:hover:bg-blue-600 dark:hover:text-white rounded-lg"><i class="bi bi-sort-up-alt"></i>&nbsp; Urutkan Terlama</a>
            </li>
            <li>
              <a href="{{ route('stok.index', ['sort' => 'desc']) }}" class="block px-4 py-2 hover:bg-blue-300 dark:hover:bg-blue-600 dark:hover:text-white rounded-lg"><i class="bi bi-sort-up"></i>&nbsp; Urutkan Terbaru</a>
            </li>
          </ul>
          <div class="py-2">
            <a href="/stok" class="block px-4 py-2 text-sm text-gray-900 hover:bg-blue-300 dark:hover:bg-blue-600 dark:text-gray-200 dark:hover:text-white rounded-lg"><i class="bi bi-arrow-clockwise"></i>&nbsp; Refresh</a>
          </div>
        </div>
      </div>

       {{-- ======= End Drop Down Filter ====== --}}
     
     <div class="overflow-x-auto shadow-2xl border mb-4 border-blue-200 sm:rounded-lg">
        <table class="w-full text-sm text-left mb-7 text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-white uppercase bg-blue-500 dark:bg-blue-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center border">No.</th>
                    <th scope="col" class="px-6 py-3 border">Tanggal Pencatatan</th>
                    <th scope="col" class="px-6 py-3 border">Beras Masuk</th>
                    <th scope="col" class="px-6 py-3 border">Beras Keluar</th>
                    <th scope="col" class="px-6 py-3 border">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stok as $item)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-medium text-gray-900 text-center whitespace-nowrap dark:text-white">{{ $loop->iteration }}</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ strftime('%A, %d %B %Y', strtotime($item->tanggal)) }}
                    </td>                    
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ number_format($item->dana_masuk, 0, ',', '.') }} Sak</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ number_format($item->dana_keluar, 0, ',', '.') }} Sak</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <a href="{{ route('stok.edit', $item->id) }}" class="inline-block px-4 py-2 mr-2 text-white bg-blue-600 rounded hover:bg-blue-700">Edit</a>
                        <form action="{{ route('stok.destroy', $item->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block px-4 py-2 text-white bg-red-600 rounded hover:bg-red-700">Hapus</button>
                        </form>
                    </td>
                </tr>                
                @endforeach
                <tr>
                    <td class="px-6 py-4 drop-shadow-lg text-red-700 font-extrabold" colspan="2">Total</td>
                    <td class="px-6 py-4 font-medium text-black whitespace-nowrap dark:text-white">{{ number_format($stok->sum('dana_masuk'), 0, ',', '.') }} Sak</td>
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ number_format($stok->sum('dana_keluar'), 0, ',', '.') }} Sak</td>
                </tr>
                <tr>
                    <td class="px-6 py-4 font-semibold" colspan="2">Sisa Stok</td>
                    <td class="px-6 py-4 font-semibold {{ ($stok->sum('dana_masuk') - $stok->sum('dana_keluar')) < 0 ? 'text-red-500' : 'text-green-500' }}">{{ number_format($stok->sum('dana_masuk') - $stok->sum('dana_keluar'), 0, ',', '.') }} Sak</td>
                </tr>                               
            </tbody>
        </table>
    </div>
    
@endsection
