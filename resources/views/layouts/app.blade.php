<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GIB PASKAS Solo</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;1,300;1,500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />
    <script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .dark {
            background-color: #22304c;
        }
    </style>
</head>

<body class="bg-purple-400">
    {{-- <div class="flex flex-wrap "> --}}

    <!-- drawer component -->
    <div id="drawer-navigation"
        class="fixed top-0 left-0 z-40 w-64 h-screen p-4 bg-purple-200 dark:bg-blue-900 dark:text-white overflow-y-auto transition-transform -translate-x-full dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-navigation-label">
        <a href="/">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-800 dark:text-white uppercase ">
                Menu</h5>
        </a>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li class="mb-4">
                    <a href="/home"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-speedometer2" viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z" />
                            <path fill-rule="evenodd"
                                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z" />
                        </svg>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-person-vcard" viewBox="0 0 16 16">
                            <path
                                d="M5 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm4-2.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5ZM9 8a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4A.5.5 0 0 1 9 8Zm1 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5Z" />
                            <path
                                d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2ZM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H8.96c.026-.163.04-.33.04-.5C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1.006 1.006 0 0 1 1 12V4Z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Keanggotaan</span>
                        <svg class="w-6 h-6 text-gray-900 hover:text-gray-50 transition-colors duration-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">

                        <li>
                            <a href="/calon-anggota"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Calon
                                Anggota</a>
                        </li>
                        <li>
                            <a href="/verifikasi-calon-anggota"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Verifikasi
                                Calon Anggota</a>
                        </li>
                        <li>
                            <a href="/anggota"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">
                                Anggota Paskas</a>
                        </li>

                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example-ortu" data-collapse-toggle="dropdown-example-ortu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-person-heart" viewBox="0 0 16 16">
                            <path
                                d="M9 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h10s1 0 1-1-1-4-6-4-6 3-6 4Zm13.5-8.09c1.387-1.425 4.855 1.07 0 4.277-4.854-3.207-1.387-5.702 0-4.276Z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"> Daftar OTA</span>
                        <svg class="w-6 h-6 text-gray-900 hover:text-gray-50 transition-colors duration-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example-ortu" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/daftar-ota"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">
                                Orang Tua Asuh</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example-calon-mitra"
                        data-collapse-toggle="dropdown-example-calon-mitra">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-bank2" viewBox="0 0 16 16">
                            <path
                                d="M8.277.084a.5.5 0 0 0-.554 0l-7.5 5A.5.5 0 0 0 .5 6h1.875v7H1.5a.5.5 0 0 0 0 1h13a.5.5 0 1 0 0-1h-.875V6H15.5a.5.5 0 0 0 .277-.916l-7.5-5zM12.375 6v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zm-2.5 0v7h-1.25V6h1.25zM8 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM.5 15a.5.5 0 0 0 0 1h15a.5.5 0 1 0 0-1H.5z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Pondok & Mitra</span>
                        <svg class="w-6 h-6 text-gray-900 hover:text-gray-50 transition-colors duration-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example-calon-mitra" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/calon-mitra"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Calon
                                Mitra</a>
                        </li>
                        <li>
                            <a href="/pondok"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Daftar
                                Mitra</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example-daftar-trip"
                        data-collapse-toggle="dropdown-example-daftar-trip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-signpost-2" viewBox="0 0 16 16">
                            <path
                                d="M7 1.414V2H2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h5v1H2.5a1 1 0 0 0-.8.4L.725 8.7a.5.5 0 0 0 0 .6l.975 1.3a1 1 0 0 0 .8.4H7v5h2v-5h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H9V6h4.5a1 1 0 0 0 .8-.4l.975-1.3a.5.5 0 0 0 0-.6L14.3 2.4a1 1 0 0 0-.8-.4H9v-.586a1 1 0 0 0-2 0zM13.5 3l.75 1-.75 1H2V3h11.5zm.5 5v2H2.5l-.75-1 .75-1H14z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"> Alur Distribusi</span>
                        <svg class="w-6 h-6 text-gray-900 hover:text-gray-50 transition-colors duration-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <ul id="dropdown-example-daftar-trip" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/daftar_trip"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Daftar
                                Trip</a>
                        </li>
                        <li>
                            <a href="/trip-penyaluran-dana"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Trip
                                Distribusi Beras</a>
                        </li>
                        <li>
                            <a href="/stok"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Beras
                                Masuk</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example-daftar-account"
                        data-collapse-toggle="dropdown-example-daftar-account">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"> Peran & User</span>
                        <svg class="w-6 h-6 text-gray-900 hover:text-gray-50 transition-colors duration-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <ul id="dropdown-example-daftar-account" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/peran"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">Peran</a>
                        </li>
                        <li>
                            <a href="/user"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">User</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example-setting-theme"
                        data-collapse-toggle="dropdown-example-setting-theme">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" fill="currentColor"
                            class="bi bi-sliders" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3h9.05zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8h2.05zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1h9.05z" />
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"> Setting Tema</span>
                        <svg class="w-6 h-6 text-gray-900 hover:text-gray-50 transition-colors duration-300"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <ul id="dropdown-example-setting-theme" class="hidden py-2 space-y-2">
                        <li
                            class="flex items-center w-full p-2 text-yellow-400 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="currentColor"
                                class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
                                <path
                                    d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z" />
                            </svg>&nbsp;
                            <button type="button" onclick="setLightMode()">Light</button>
                        </li>
                        <li
                            class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">
                            <svg class="dark:text-yellow-300" xmlns="http://www.w3.org/2000/svg" width="20"
                                fill="currentColor" class="bi bi-moon-stars" viewBox="0 0 16 16">
                                <path
                                    d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z" />
                                <path
                                    d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                            </svg>&nbsp;
                            <button type="button" onclick="setDarkMode()">Dark</button>
                        </li>
                    </ul>

                </li>
                <hr>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-200 dark:text-white dark:hover:bg-gray-700 hover:shadow-lg dark:hover:shadow-lg"
                        aria-controls="dropdown-example-opsi" data-collapse-toggle="dropdown-example-opsi">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 text-gray-9000 transition dura5on-75  group-hover:text-gray-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap"> Account</span>
                    </button>
                    <ul id="dropdown-example-opsi" class="hidden py-2 space-y-2">
                        <li>
                            <a href="/profile"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:text-white dark:hover:bg-gray-700 hover:shadow-2xl">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" fill="currentColor"
                                    class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg>&nbsp;
                                My Profile</a>
                        </li>
                        <li>
                            <a class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-blue-400 dark:hover:bg-gray-700 hover:shadow-2xl hover:text-red-500 dark:text-red-700"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="23" fill="currentColor"
                                    class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                                    <path fill-rule="evenodd"
                                        d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                                </svg>&nbsp;
                                LogOut
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
    </div>


    <div class="mt-12 h-screen">@yield('content')</div>

    {{-- </div> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
    <script>
        // Fungsi untuk mengatur tema ke mode Light
        function setLightMode() {
            document.body.style.backgroundColor = 'white';
            document.body.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        }

        // Fungsi untuk mengatur tema ke mode Dark
        function setDarkMode() {
            document.body.style.backgroundColor = '#111827';
            document.body.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }

        // Fungsi untuk memeriksa tema yang disimpan di penyimpanan lokal saat halaman dimuat
        function checkTheme() {
            var savedTheme = localStorage.getItem('theme');
            if (savedTheme === 'light') {
                setLightMode();
            } else if (savedTheme === 'dark') {
                setDarkMode();
            }
        }

        // Panggil fungsi checkTheme saat halaman dimuat
        checkTheme();
    </script>
</body>

</html>







{{-- <li>   ================= MENU SIDEBAR DARI FLOWBITE YANG GA KEPAKE
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-400 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-9000 transition dura5on-75  group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>
                <span class="inline-flex items-center justify-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-100 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-400 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
             </a>
          </li> 
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-400 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Products</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>
             </a>
          </li>
          <li>
             <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75  group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>
             </a>
          </li>
          
          --}}



{{-- ============ MENU JADUL
          <div class="flex flex-col flex-shrink-0 p-6 bg-body-tertiary shadow-2xl w-1/4" style="width: 40vh; height: 97.4vh;">
             <a href="/" class="flex items-center mb-3 md:mb-0 md:me-auto link-body-emphasis text-decoration-none">
                    <svg class="bi pe-none me-2" width="40" height="32">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    <span class="fs-4">PASKAS SOLO</span>
                </a> --}}
{{-- <button id="sidebar-hide-btn" class="inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline bg-blue-600 text-white hover:bg-blue-600" style="position: fixed; top: 15px; left: 190px; z-index: 9999;">
                <i class="bi bi-layout-text-sidebar"></i>
            </button> --}}
<hr>
{{-- <ul class="flex flex-wrap list-none pl-0 mb-0  flex-col mb-auto">
              <li class="">
                <button class="inline-block py-2 px-4 no-underline link-body-emphasis inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-toggle flex items-center collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                  <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#home"></use>
                  </svg>
                  DASHBOARD
                </button>
                <div class="hidden" id="home-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-xs">
                    <li><a href="/home" class="inline-block py-2 px-4 no-underline link-body-emphasis">Beranda</a></li>
                    <li><a href="/" class="inline-block py-2 px-4 no-underline link-body-emphasis">Landing Page</a></li>
                  </ul>
                </div>
              </li>
              <li class="">
                <button class="inline-block py-2 px-4 no-underline link-body-emphasis inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-toggle flex items-center collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                  <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#speedometer2"></use>
                  </svg>
                  KEANGGOTAAN
                </button>
                <div class="hidden" id="dashboard-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-xs">
                    <li><a href="/calon-anggota" class="inline-block py-2 px-4 no-underline link-body-emphasis">Calon Anggota</a></li>
                    <li><a href="/verifikasi-calon-anggota" class="inline-block py-2 px-4 no-underline link-body-emphasis">Verifikasi Calon Anggota</a></li>
                    <li><a href="/anggota" class="inline-block py-2 px-4 no-underline link-body-emphasis">Daftar Anggota</a></li>
                  </ul>
                </div>
              </li>
              <li class="">
                <button class="inline-block py-2 px-4 no-underline link-body-emphasis inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-toggle flex items-center collapsed" data-bs-toggle="collapse" data-bs-target="#user-collapse" aria-expanded="false">
                  <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                  </svg>
                  USER/PENGGUNA
                </button>
                <div class="hidden" id="user-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-xs">
                    <li><a href="/peran" class="inline-block py-2 px-4 no-underline link-body-emphasis">Daftar Peran</a></li>
                    <li><a href="/user" class="inline-block py-2 px-4 no-underline link-body-emphasis">Daftar User</a></li>
                  </ul>
                </div>
              </li> --}}
{{-- <li class="">
                <button class="inline-block py-2 px-4 no-underline link-body-emphasis inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-toggle flex items-center collapsed" data-bs-toggle="collapse" data-bs-target="#pondok-collapse" aria-expanded="false">
                  <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                  </svg>
                  PONDOK/MITRA
                </button>
                <div class="hidden" id="pondok-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-xs">
                    <li><a href="/calon-mitra" class="inline-block py-2 px-4 no-underline link-body-emphasis">Calon Mitra</a></li>
                    <li><a href="/pondok" class="inline-block py-2 px-4 no-underline link-body-emphasis">Daftar Mitra</a></li>
                  </ul>
                </div>
              </li> --}}
{{-- <li class="">
                <button class="inline-block py-2 px-4 no-underline link-body-emphasis inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-toggle flex items-center collapsed" data-bs-toggle="collapse" data-bs-target="#alur-collapse" aria-expanded="false">
                  <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                  </svg>
                  ALUR DANA
                </button>
                <div class="hidden" id="alur-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-xs">
                    <li><a href="/daftar_trip" class="inline-block py-2 px-4 no-underline link-body-emphasis">Daftar Trip</a></li>
                    <li><a href="trip-penyaluran-dana" class="inline-block py-2 px-4 no-underline link-body-emphasis">Trip Penyaluran Dana</a></li>
                  </ul>
                </div>
              </li> --}}
{{-- <li class="">
                <button class="inline-block py-2 px-4 no-underline link-body-emphasis inline-block align-middle text-center select-none border font-normal whitespace-no-wrap rounded py-1 px-3 leading-normal no-underline btn-toggle flex items-center collapsed" data-bs-toggle="collapse" data-bs-target="#ota-collapse" aria-expanded="false">
                  <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                  </svg>
                  ORTU/OTA
                </button>
                <div class="hidden" id="ota-collapse">
                  <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 text-xs">
                    <li><a href="/daftar-ota" class="inline-block py-2 px-4 no-underline link-body-emphasis">Daftar Orang Tua Asuh</a></li>
                  </ul>
                </div>
              </li>
            </ul> --}}

{{-- <div class="relative ms-4">
              <a href="#" class="flex items-center link-body-emphasis text-decoration-none  inline-block w-0 h-0 ml-1 align border-b-0 border-t-1 border-r-1 border-l-1" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-full me-2">
                <strong>mdo</strong>
              </a>
              <ul class=" absolute left-0 z-50 float-left hidden list-reset	 py-2 mt-1 text-base bg-white border border-gray-300 rounded text-small ms-4 shadow">
                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="#">Profil</a></li>
                <li><hr class="h-0 my-2 overflow-hidden border-t-1 border-gray-300"></li>
                <li><a class="block w-full py-1 px-6 font-normal text-gray-900 whitespace-no-wrap border-0" href="#">Keluar</a></li>
              </ul>
            </div>
          </div> --}}

{{-- <script src="https://cdn.tailwindcss.com"></script> --}}
{{-- <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script> --}}
