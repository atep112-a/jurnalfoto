<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naomi Photo</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body class="bg-gray-100">
    <nav class="flex font-sans bg-white">
        <div class="container md:grid md:grid-cols-3 md:gap-5">
            <div class="flex items-center p-3 md:col-span-1">
                <button id="sidebarToggle" class="md:hidden">
                    <i class="fas fa-bars"></i>
                </button>
                <i class="fas fa-camera px-3 py-2 text-lg md:text-xl"></i>
                <h1 class="font-bold py-1 text-sm md:text-md">Naomi Photo Studio</h1>
            </div>

            <div class="navbar-items flex p-3 md:flex md:col-span-1 md:justify-center">
                <a href="#" class="hidden md:block"><i class="fas fa-box hover:text-indigo-500 px-3 py-2"></i></a>
                <a href="#" class="hidden md:block"><i class="fas fa-address-card hover:text-indigo-500 px-3 py-2"></i></a>
                <a href="#" class="hidden md:block"><i class="fas fa-chat hover:text-indigo-500 px-3 py-2"></i></a>
                <button id="navbarItemsToggle" class="md:hidden">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
            </div>
            <div class="flex items-center p-4 md:col-span-1 md:justify-end navbar-items hidden md:flex">
                <a href="#"><i class="fas fa-user text-lg hover:text-indigo-500 px-3 py-2"></i></a>
                <h2 class="font-bold py-1">Ahmed ali</h2>
            </div>
        </div>
    </nav>