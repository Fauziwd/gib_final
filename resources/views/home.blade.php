@extends('layouts.app')
@include('layouts.navbar')

<div class="flex flex-wrap justify-center mt-3">
    <div class="w-1/4 pb-6">
        <div class="h-32 flex items-center justify-center">
            <p id="digital-clock"
                class="text-gray-800 dark:text-red-500 font-bold text-4xl lg:text-6xl sm:text-sm drop-shadow-lg">Jam</p>
        </div>
    </div>
    <div class="w-2/4 pb-6 pr-3 pl-3">
        <div class="rounded-lg h-32 flex" style="background-image: url('/image/dashboard.jpg');">
            <p class="text-gray-800 dark:text-white text-xl font-bold mt-12 ml-10 drop-shadow-lg">Dashboard Admin</p>
        </div>
    </div>
    <div class="w-1/4 pb-6">
        <div class="h-32 flex flex-col items-center justify-center">
            <p id="date" class="text-gray-800 dark:text-red-500 text-xl">Tanggal</p>
            <p id="day" class="text-gray-800 dark:text-white text-lg font-bold mt-2">Hari</p>
        </div>
    </div>
</div>

<div class="flex mb-12 ml-3 mr-6">
    <div
        class="w-full lg:w-9/12 bg-blue-200 dark:bg-blue-950 shadow-blue2 border border-blue-300 p-10 rounded-lg flex items-center justify-center lg:mb-0">
        <canvas id="myChart" class="w-full h-full"></canvas>
    </div>
    <div class="w-full lg:w-3/12 flex flex-col lg:ml-4">
        <div class="flex flex-col bg-red-500 dark:bg-red-950 border border-red-500 rounded-full mb-4 shadow-red">
            <div class="p-4">
                <span class="text-white font-bold">Jumlah Anggota: </span>
                <span class="text-white"><b>{{ $totalAnggota }}</b> Orang</span>
            </div>
        </div>
        <div class="flex flex-col bg-blue-300 dark:bg-blue-950 border border-blue-500 rounded-full shadow-blue mb-4">
            <div class="p-4">
                <span class="text-white font-bold">Jumlah OTA:</span>
                <span class="text-white"><b>{{ $totaldaftarOta }}</b> Orang</span>
            </div>
        </div>
        <div class="flex flex-col bg-gray-500 dark:bg-gray-750 border border-white-500 shadow-gray rounded-full">
            <div class="p-4">
                <span class="text-white font-bold">Jumlah Pesantren:</span>
                <span class="text-white"><b>{{ $totalpondok }}</b>&nbsp; Pondok</span>
            </div>
        </div>
        <div
            class="flex flex-col mt-4 bg-green-400 dark:bg-green-950 border border-green-500 shadow-green rounded-full">
            <div class="p-4">
                <span class="text-white font-bold">Total Beras Masuk:</span>
                <span class="text-white"><b>{{ $totalDanaMasuk }}</b>&nbsp; Sak</span>
            </div>
        </div>
        <div
            class="flex flex-col mt-4 bg-yellow-500 dark:bg-yellow-600 border border-yellow-300 shadow-yellow rounded-full">
            <div class="p-4">
                <span class="text-white font-bold">Total Beras Keluar:</span>
                <span class="text-white"><b>{{ $totalDanaKeluar }}</b>&nbsp; Sak</span>
            </div>
        </div>
        <div
            class="flex flex-col pb-3 mt-4 bg-purple-200 dark:bg-blue-900  dark:text-white border border-blue-300 shadow-purple rounded-lg">
            <canvas id="myChart2" class="w-full h-auto"></canvas>
        </div>
        {{-- <form action="{{ route('home') }}" method="GET">
                <select class="shadow-lg rounded-full" name="bulan">
                    <option value="1" {{ $bulan == 1 ? 'selected' : '' }}>Januari</option>
                    <option value="2" {{ $bulan == 2 ? 'selected' : '' }}>Februari</option>
                    <option value="3" {{ $bulan == 3 ? 'selected' : '' }}>Maret</option>
                    <option value="4" {{ $bulan == 3 ? 'selected' : '' }}>April</option>
                    <option value="5" {{ $bulan == 3 ? 'selected' : '' }}>Mei</option>
                    <option value="6" {{ $bulan == 3 ? 'selected' : '' }}>Juni</option>
                    <option value="7" {{ $bulan == 3 ? 'selected' : '' }}>Juli</option>
                    <option value="8" {{ $bulan == 3 ? 'selected' : '' }}>Agustus</option>
                    <option value="9" {{ $bulan == 3 ? 'selected' : '' }}>September</option>
                    <option value="10" {{ $bulan == 3 ? 'selected' : '' }}>Oktober</option>
                    <option value="11" {{ $bulan == 3 ? 'selected' : '' }}>November</option>
                    <option value="12" {{ $bulan == 3 ? 'selected' : '' }}>Desember</option>
                    <!-- Opsi bulan lainnya -->
                </select>
                <button class="rounded-lg bg-blue-500" type="submit">Submit</button>
            </form> --}}


    </div>

    <section id="loading">
        <div id="loading-content"></div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // =========== CHART BAR ============

        var ctx = document.getElementById('myChart').getContext('2d');
        var gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(75, 192, 192, 0.2)');
        gradient.addColorStop(1, 'rgba(75, 192, 192, 0.8)');

        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['dana Masuk', 'Dana Keluar', 'Total Pondok', 'OTA', 'Anggota Paskas'],
                datasets: [{
                    label: 'Grafic Data',
                    data: [{{ $totalDanaMasuk }}, {{ $totalDanaKeluar }}, {{ $totalpondok }},
                        {{ $totaldaftarOta }}, {{ $totalAnggota }}
                    ],
                    backgroundColor: gradient,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // =========== CHART DONAT ============

        var ctx = document.getElementById('myChart2').getContext('2d');
        var data = {
            labels: ['Beras Masuk', 'Beras Keluar', 'Sisa Stok'],
            datasets: [{
                label: '(satuan Sak)',
                data: [{{ $totalDanaMasuk }}, {{ $totalDanaKeluar }},
                    {{ $totalDanaMasuk - $totalDanaKeluar }}
                ],
                backgroundColor: ['rgb(255, 99, 132)', 'rgb(54, 162, 235)', 'rgb(255, 205, 86)'],
                hoverOffset: 10
            }]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                r: {
                    angleLines: {
                        display: true
                    },
                    suggestedMin: 0,
                    suggestedMax: 350,
                    grid: {
                        color: '#ccc',
                        circular: true
                    },
                    pointLabels: {
                        color: '#333',
                        font: {
                            weight: 'bold'
                        }
                    }
                }
            }
        };

        var myChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });

        // ========== JAM DIGITAL ==========
        function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            var time = hours + ':' + minutes + ':' + seconds;
            document.getElementById('digital-clock').textContent = time;

            setTimeout(updateClock, 1000);
        }

        updateClock();

        function updateDateAndDay() {
            var now = new Date();
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var date = now.toLocaleDateString('id-ID', options);
            var day = now.toLocaleDateString('id-ID', {
                weekday: 'long'
            });

            document.getElementById('date').textContent = date;
            document.getElementById('day').innerHTML = "Sekarang hari <mark>" + day + "</mark>";
        }

        updateDateAndDay();

        var calendarButton = document.getElementById('calendar-button');
        calendarButton.addEventListener('click', openCalendar);

        function showLoading() {
            document.querySelector('#loading').classList.add('loading');
            document.querySelector('#loading-content').classList.add('loading-content');
        }

        function hideLoading() {
            document.querySelector('#loading').classList.remove('loading');
            document.querySelector('#loading-content').classList.remove('loading-content');
        }
    </script>




    {{-- <div class="mt-7">
    <div class="section fb-card retro-card">
        <h2 class="font-bold text-2xl">Pengaturan Anggota</h2>
        <div class="fb-card-content">
            <a href="/calon-anggota" class="dashboard-link fb-button retro-button">Calon Anggota</a>
        </div>
        <div class="fb-card-content">
            <a href="/verifikasi-calon-anggota" class="dashboard-link fb-button retro-button">Verifikasi Calon Anggota</a>
        </div>
        <div class="fb-card-content">
            <a href="/anggota" class="dashboard-link fb-button retro-button">Daftar Anggota</a>
        </div>
    </div>
    <hr>
    <div class="mt-4">
        <h2 class="font-bold text-2xl">Pengaturan User</h2>
        <div class="fb-card-content">
            <a href="/peran" class="dashboard-link fb-button retro-button">Daftar Peran</a>
        </div>
        <div class="fb-card-content">
            <a href="/user" class="dashboard-link fb-button retro-button">Daftar User</a>
        </div>
    </div>
    <hr>
    <div class="mt-4">
        <h2 class="font-bold text-2xl">Pengaturan Pondok/Mitra</h2>
        <div class="fb-card-content">
            <a href="/calon-mitra" class="dashboard-link fb-button retro-button">Calon Mitra</a>
        </div>
        <div class="fb-card-content">
            <a href="/pondok" class="dashboard-link fb-button retro-button">Daftar Pondok</a>
        </div>
    </div>
    <hr>
    <div class="mt-4">
        <h2 class="font-bold text-2xl">Pengaturan Sistem Donasi</h2>
        <div class="fb-card-content">
            <a href="/daftar_trip" class="dashboard-link fb-button retro-button">Daftar Trip</a>
        </div>
        <div class="fb-card-content">
            <a href="/trip-penyaluran-dana" class="dashboard-link fb-button retro-button">Trip Penyaluran Dana</a>
        </div>
    </div>
    <hr>
    <div class="mt-4">
        <h2 class="font-bold text-2xl">Pengaturan OTA</h2>
        <div class="fb-card-content">
            <a href="/daftar-ota" class="dashboard-link fb-button retro-button">Daftar OTA</a>
        </div>
    </div>                        
</div>
</div>
</div>
</div>
</div>
</div> --}}
