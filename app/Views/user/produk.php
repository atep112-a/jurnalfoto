<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>Product Page</title>
    <!-- Include the Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8">
        <div class="flex justify-between items-center text-center mb-8">
            <h1 class="text-3xl font-semibold">Pilih Produk</h1>
            <button id="cartIcon" class="flex items-center p-4 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600" onclick="openCartModal()">
                <i class="fas fa-shopping-cart"></i>
            </button>

        </div>

        <!-- Product Grid -->
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <!-- Product Card 1 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 1</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$29.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 2</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$39.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 3</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$49.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 3</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$49.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 3</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$49.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 3</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$49.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 3</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$49.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Tambah ke keranjang</button>

                    </div>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-40 object-cover object-center" src="https://via.placeholder.com/400x250" alt="product image">
                <div class="p-4">
                    <h2 class="text-lg font-semibold mb-2">Product 3</h2>
                    <p class="text-gray-600 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="mt-2 flex justify-between items-center">
                        <span class="font-bold text-lg">$49.99</span>
                        <button class="px-3 py-1 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600 text-sm" onclick="addToCart({ name: 'Product Name', price: '$XX.XX' })">Add to Cart</button>

                    </div>
                </div>
            </div>
        </div>
    </div>














    <div id="cartModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 hidden">
        <div class="flex justify-center items-center w-full h-full">
            <div class="bg-white p-8 rounded-lg w-2/4 h-3/4 relative">
                <h2 class="text-lg font-semibold mb-4">Keranjang</h2>
                <div id="modalContent" class="grid grid-cols-3 gap-2 overflow-y-auto max-h-60"></div>
                <div class="mt-4">
                    <label for="payment" class="block text-sm font-medium text-gray-700">Pilih Metode Pembayaran</label>
                    <select id="payment" name="payment" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="cash">Tunai</option>
                        <option value="cashless">Non-Tunai</option>
                    </select>
                </div>
                <div class="flex justify-end my-4">

                    <button class="px-4 py-2 bg-green-500 text-white font-semibold rounded hover:bg-green-600" onclick="checkout()">Checkout</button>
                    <button class="ml-4 px-4 py-2 bg-indigo-500 text-white font-semibold rounded hover:bg-indigo-600" onclick="closeCartModal()">Close</button>
                </div>
            </div>
        </div>
    </div>






    <script>
        // Simpan data produk dalam file JSON
        let products = [];

        // Fungsi untuk menambahkan produk ke dalam keranjang
        function addToCart(product) {
            products.push(product);
            updateCartCount();
            alert("Produk Berhasil ditambahkan ke keranjang");
        }

        // Fungsi untuk memperbarui jumlah produk di keranjang
        function updateCartCount() {
            let cartIcon = document.getElementById('cartIcon');
            cartIcon.innerHTML = '<i class="fas fa-shopping-cart"></i> ' + products.length;
        }

        // Fungsi untuk menampilkan modal dengan produk yang dipilih
        function openCartModal() {
            let modalContent = document.getElementById('modalContent');
            modalContent.innerHTML = ''; // Kosongkan konten modal sebelum menambahkan produk

            products.forEach(product => {
                modalContent.innerHTML += `
        <div class="bg-gray-100 p-4 rounded-md mb-4">
            <h3 class="text-lg font-semibold mb-2">${product.name}</h3>
            <p class="text-gray-600">Price: ${product.price}</p>
            <label for="quantity_${product.id}" class="block mt-2">Mau berapa orang?</label>
            <input type="number" id="quantity_${product.id}" name="quantity_${product.id}" min="1" class="w-full px-3 py-2 mt-1 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </div>`;
            });


            // Tampilkan modal
            document.getElementById('cartModal').classList.remove('hidden');
        }

        // Fungsi untuk menutup modal
        function closeCartModal() {
            // Sembunyikan modal
            document.getElementById('cartModal').classList.add('hidden');
        }

        function checkout() {
            // Lakukan apa pun operasi checkout yang diperlukan di sini
            // Misalnya, simpan data ke database, lakukan pembayaran, dll.

            // Setelah operasi checkout selesai, refresh halaman
            location.reload();
        }
    </script>

</body>

</html>