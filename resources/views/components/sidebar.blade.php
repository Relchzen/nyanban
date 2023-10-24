<div class="bg-maroon text-light flex justify-between px-2 md:hidden">
    <a href="/" class="flex-none">
        <div class="flex p-1 hover:cursor-pointer">
            <x-lucide-cat class="w-7 h-7 text-light mb-1" />
                <p class="text-light text-2xl font-comfortaa font-semibold">
                    Nyanban
                </p>
        </div>
    </a>

    <button onclick="toggleSidebar()" class="focus:outline-none" id="menu-button">
        <x-lucide-menu class="w-8 h-8 text-light" />
    </button>
</div>

<div id="sidebar" class="bg-maroon w-64 pt-2 text-light font-comfortaa absolute md:relative inset-y-0 left-0 transform -translate-x-full md:translate-x-0 transition duration-200 ease-in-out">
    <a href="/" class="flex-none">
        <div class="flex p-1 hover:cursor-pointer justify-center">
            <x-lucide-cat class="w-7 h-7 text-light mb-1" />
                <p class="text-light text-2xl font-comfortaa font-semibold">
                    Nyanban
                </p>
        </div>
    </a>
    <nav class="p-4">
        <a href="/admin" class="{{ Route::is('admin') ? 'bg-active text-dark block' : '' }} my-1 block py-2 px-4 rounded-xl hover:bg-active transition duration-100 hover:text-dark">Order</a>
        <a href="/admin/menu" class="{{ Route::is('admin.menu') ? 'bg-active text-dark block' : '' }} my-1 block py-2 px-4 rounded-xl hover:bg-active transition duration-100 hover:text-dark">Menu</a>
        <a href="/admin/category" class="{{ Route::is('admin.category') ? 'bg-active text-dark block' : '' }} my-1 block py-2 px-4 rounded-xl hover:bg-active transition duration-100 hover:text-dark">Category</a>
        <a href="/admin/users" class="{{ Route::is('admin.users') ? 'bg-active text-dark block' : '' }} 
        my-1 block py-2 px-4 rounded-xl hover:bg-active transition duration-100 hover:text-dark">Users</a>
    </nav>
    <div class="flex justify-center mt-80">
        <x-logout />
    </div>
</div>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('-translate-x-full');
    }
</script>