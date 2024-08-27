<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $Title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>/assets/style.css" rel="stylesheet">
    <style>
        .btn-resume {
            @apply bg-blue-500 text-white;
        }

        .btn-resume:hover {
            @apply bg-blue-700;
        }
    </style>
</head>

<body>
    <header>
        <nav class="bg-gray-800 p-4">
            <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center">
                <!-- Logo and Toggle Button -->
                <div class="flex justify-between items-center w-full lg:w-auto">
                    <a class="text-white text-lg font-semibold" href="#">
                        Bhavik Patel
                    </a>
                    <button class="text-white lg:hidden block" id="nav-toggle">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Menu -->
                <div class="w-full lg:flex lg:items-center lg:w-auto hidden" id="nav-content">
                    <ul class="flex flex-col items-center lg:flex-row lg:space-x-4 text-white w-full lg:w-auto">
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4 block hover:bg-gray-700 text-center" aria-current="page" href="<?= site_url('Home') ?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4 block hover:bg-gray-700 text-center" href="{{ url_for('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4 block hover:bg-gray-700 text-center" href="{{ url_for('projects') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link py-2 px-4 block hover:bg-gray-700 text-center" href="{{ url_for('contect') }}">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn-resume py-2 px-4 block bg-gray-600 hover:bg-gray-700 rounded text-center" href="#" target="_blank">Resume</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>