<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/app.css">
</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Pemesanan Photo Studio</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="#" method="POST">
                <div>
                    <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Masukan nama</label>
                    <div class="mt-2">
                        <input id="nama" name="nama" type="text" autocomplete="nama" required class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="no_hp" class="block text-sm font-medium leading-6 text-gray-900">Masukan nomor WhatsApp</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Nomor aktif yaa!</a>
                        </div>
                    </div>
                    <div class="mt-2 flex">
                        <div class="flex items-center justify-center bg-indigo-600 text-white px-3" style="border-top-left-radius: 0.375rem; border-bottom-left-radius: 0.375rem;">
                            +62
                        </div>
                        <input id="no_hp" name="no_hp" type="number" autocomplete="current-no_hp" required class=" block w-full rounded-r-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Lanjutkan</button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Sudah pernah pesan?
                <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Ketik namamu maka akan muncul rekomendasinya</a>
            </p>
        </div>
    </div>
</body>

</html>