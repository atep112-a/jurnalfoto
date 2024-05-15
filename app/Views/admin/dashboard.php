<main class="mx-4">
    <div class="container mx-auto m-4">
        <h1 class="text-2xl font-medium my-4">Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Navbar 1 -->
            <div class="bg-indigo-500 text-white p-4 rounded-lg shadow-md">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-shopping-cart text-md mr-2"></i>
                    <h2 class="text-md font-semibold">All Products</h2>
                </div>
                <p class="text-white text-md">View all available products.</p>
            </div>
            <!-- Navbar 2 -->
            <div class="bg-green-500 text-white p-4 rounded-lg shadow-md">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-shopping-bag text-md mr-2"></i>
                    <h2 class="text-md font-semibold">New Orders</h2>
                </div>
                <p class="text-white text-md">View new orders placed.</p>
            </div>
            <!-- Navbar 3 -->
            <div class="bg-zinc-500 text-white p-4 rounded-lg shadow-md">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-users text-md mr-2"></i>
                    <h2 class="text-md font-semibold">Team</h2>
                </div>
                <p class="text-white text-md">Manage your team members.</p>
            </div>
            <!-- Navbar 4 -->
            <div class="bg-yellow-500 text-white p-4 rounded-lg shadow-md">
                <div class="flex justify-center items-center mb-4">
                    <i class="fas fa-chart-line text-md mr-2"></i>
                    <h2 class="text-md font-semibold">All Reports</h2>
                </div>
                <p class="text-white text-md">View all available reports.</p>
            </div>
        </div>
    </div>


    <!-- Analytics -->
    <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- Update Section -->
        <div class="bg-teal-400 border-teal-400 shadow-md text-white p-4">
            <div class="flex items-center">
                <!-- Icon -->
                <i class="fas fa-sync-alt text-4xl mr-4"></i>
                <!-- Info -->
                <div>
                    <h1 class="text-lg font-bold">Update Nomor Antrian</h1>
                    <p class="text-xs">Silakan pilih nomor antrian Anda di Photobox atau Photo Studio.</p>
                    <!-- Cards -->
                    <div class="grid grid-cols-2 gap-4 mt-2">
                        <!-- Card 1: Photobox -->
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold mb-2 text-teal-400 text-center">Photobox</h2>
                            <div class="flex items-center justify-between">
                                <!-- <button class="text-gray-600 hover:text-teal-500">
                                            <i class="fas fa-chevron-left"></i>
                                        </button> -->
                                <span class="text-teal-500 font-semibold text-center">001</span>
                                <button class="text-gray-600 hover:text-teal-500">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Card 2: Photo Studio -->
                        <div class="bg-white p-4 rounded-lg shadow-md">
                            <h2 class="text-lg font-semibold mb-2 text-teal-400 text-center">Photo Studio</h2>
                            <div class="flex items-center justify-between">
                                <!-- <button class="text-gray-600 hover:text-teal-500">
                                            <i class="fas fa-chevron-left"></i>
                                        </button> -->
                                <span class="text-teal-500 font-semibold text-center">007</span>
                                <button class="text-gray-600 hover:text-teal-500">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- End Cards -->
                </div>
            </div>
        </div>
        <!-- End Update Section -->


        <!-- Alert Section -->
        <div class="bg-gray-900 text-white p-4">
            <h1 class="text-lg font-bold">Status Customer</h1>
            <p class="text-xs">Nomor antrian dapat diubah jika statusnya sudah tahap pengeditan.</p>
            <div class="grid grid-cols-2 gap-4 mt-2">
                <!-- Card 1: Photobox -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2 text-gray-900">Photobox</h2>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="bg-teal-400 rounded-md">
                                <h1 class="text-white text-sm text-center">Ardan</h1>
                            </div>
                            <p class="text-gray-600">Status Photo:</p>
                            <p class="text-teal-500 font-semibold">Sesi Foto</p>
                        </div>
                        <i class="fas fa-camera text-teal-500 text-3xl"></i>
                    </div>
                </div>
                <!-- Card 2: Photo Studio -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <h2 class="text-lg font-semibold mb-2 text-gray-900">Photo Studio</h2>
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="bg-teal-400 rounded-md">
                                <h1 class="text-white text-sm text-center">Arden</h1>
                            </div>
                            <p class="text-gray-600">Status Photo:</p>
                            <p class="text-teal-500 font-semibold">Pengeditan Foto</p>
                        </div>
                        <i class="fas fa-edit text-teal-500 text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>


        <!-- Sales Overview -->
        <div class="card mt-6 bg-white p-5">

            <!-- header -->
            <div class="card-header flex justify-between">
                <h1 class="text-lg font-bold">Sales Overview</h1>

                <div class="flex items-center">

                    <a href="#">
                        <i class="fas fa-chevron-double-down mr-6"></i>
                    </a>

                    <a href="#">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>

                </div>

            </div>
            <!-- end header -->

            <!-- body -->
            <div class="card-body grid grid-cols-2 gap-6 lg:grid-cols-1">

                <div class="p-8">
                    <h1 class="text-3xl font-bold">5,337</h1>
                    <p class="text-black font-medium">Sales this month</p>

                    <div class="mt-8 mb-2 flex items-center">
                        <div class="py-1 px-3 rounded bg-green-200 text-green-900 mr-3">
                            <i class="fas fa-caret-up"></i>
                        </div>
                        <p class="text-black"><span class="text-green-400 font-semibold">12%</span> more sales in comparison to last month.</p>
                    </div>

                    <div class="flex items-center">
                        <div class="py-1 px-3 rounded bg-red-200 text-red-900 mr-3">
                            <i class="fas fa-caret-down"></i>
                        </div>
                        <p class="text-black"><span class="text-red-400 font-semibold">8%</span> revenue per sale in comparison to last month.</p>
                    </div>

                    <a href="#" class="btn mt-15 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">view details</a>

                </div>


            </div>
            <!-- end body -->

        </div>
        <!-- End Sales Overview -->


    </div>
    <!-- End Analytics -->

</main>