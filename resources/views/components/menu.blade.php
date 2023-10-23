<!DOCTYPE html>
<html>
<head>
    <title>Product Catalog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css">
</head>
<body class="bg-red-300 p-10 font-sans">
<style>
    /* Menghapus border biru pada elemen yang mendapatkan fokus */
    .outline-none:focus {
        outline: none;
    }

    .product-card {
        width: 100%;
        max-width: 300px; /* You can adjust the max-width as needed */
    }

    .product-card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: space-between; /* Distributes cards evenly horizontally */
    }

    .buttons a {
        display: inline-block;
        padding: 8px 16px; /* Adjust the padding as needed */
        margin: 8px 0; /* Add margin for spacing */
        border: 2px solid transparent;
        border-radius: 4px;
        background-color: #2563EB;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }

    .buttons a:hover {
        background-color: #1C4BCC;
        transform: scale(1.05);
    }
</style>

<div class="container mx-auto mt-10">
    <div class="product-card-container">
        <!-- Repeat this product card for each product -->
        <div class="product-card rounded-lg shadow-lg bg-white p-4">
            <div class="product-image h-64 overflow-hidden relative p-4 mt-2">
                <div class="image-wrapper bg-gradient-to-b p-4 rounded-lg">
                    <img src="https://cdn.pixabay.com/photo/2016/11/23/06/57/isolated-t-shirt-1852115__480.png"
                         alt="Product Image" class="w-full h-full object-cover transform transition-transform hover:scale-105 rounded-lg">
                </div>
            </div>
            <div class="product-details p-4">
                <h2 class="product-title text-2xl font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="rounded-xl text-base p-2 mb-2 text-gray-800">$9.99</p>
                <p class="product-description text-base leading-6 text-gray-600 mb-2">This is a brief description of the product.</p>
                <div class="buttons flex justify-between items-center">
                    <a href="add-to-cart-page.html" class="rounded-full text-white cursor-pointer transition-transform hover:scale-105 transform transition-opacity hover:opacity-90 outline-none">Add</a>
                    <a href="compare-page.html" class="rounded-full text-white cursor-pointer transition-transform hover:scale-105 transform transition-opacity hover:opacity-90 outline-none">View</a>
                </div>
            </div>
        </div>
        <!-- End of product card -->
        
        <!-- Repeat this product card for each product -->
        <div class="product-card rounded-lg shadow-lg bg-white p-4">
            <div class="product-image h-64 overflow-hidden relative p-4 mt-2">
                <div class="image-wrapper bg-gradient-to-b p-4 rounded-lg">
                    <img src="https://cdn.pixabay.com/photo/2016/11/23/06/57/isolated-t-shirt-1852115__480.png"
                         alt="Product Image" class="w-full h-full object-cover transform transition-transform hover:scale-105 rounded-lg">
                </div>
            </div>
            <div class="product-details p-4">
                <h2 class="product-title text-2xl font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="rounded-xl text-base p-2 mb-2 text-gray-800">$9.99</p>
                <p class="product-description text-base leading-6 text-gray-600 mb-2">This is a brief description of the product.</p>
                <div class="buttons flex justify-between items-center">
                    <a href="add-to-cart-page.html" class="rounded-full text-white cursor-pointer transition-transform hover:scale-105 transform transition-opacity hover:opacity-90 outline-none">Add</a>
                    <a href="compare-page.html" class="rounded-full text-white cursor-pointer transition-transform hover:scale-105 transform transition-opacity hover:opacity-90 outline-none">View</a>
                </div>
            </div>
        </div>
        <!-- End of product card -->
        
        <!-- Repeat this product card for each product -->
        <div class="product-card rounded-lg shadow-lg bg-white p-4">
            <div class="product-image h-64 overflow-hidden relative p-4 mt-2">
                <div class="image-wrapper bg-gradient-to-b p-4 rounded-lg">
                    <img src="https://cdn.pixabay.com/photo/2016/11/23/06/57/isolated-t-shirt-1852115__480.png"
                         alt="Product Image" class="w-full h-full object-cover transform transition-transform hover:scale-105 rounded-lg">
                </div>
            </div>
            <div class="product-details p-4">
                <h2 class="product-title text-2xl font-semibold text-gray-800 mb-2">Product Name</h2>
                <p class="rounded-xl text-base p-2 mb-2 text-gray-800">$9.99</p>
                <p class="product-description text-base leading-6 text-gray-600 mb-2">This is a brief description of the product.</p>
                <div class="buttons flex justify-between items-center">
                    <a href="add-to-cart-page.html" class="rounded-full text-white cursor-pointer transition-transform hover:scale-105 transform transition-opacity hover:opacity-90 outline-none">Add</a>
                    <a href="compare-page.html" class="rounded-full text-white cursor-pointer transition-transform hover:scale-105 transform transition-opacity hover:opacity-90 outline-none">View</a>
                </div>
            </div>
        </div>
        <!-- End of product card -->
    </div>
</div>

<div class="credit text-center mt-10">
    uji coba <span class="text-red-500 text-2xl"></span><a href="https://www.learningrobo.com/"
                                                           class="text-black font-semibold"></a>
</div>
</body>
</html>
