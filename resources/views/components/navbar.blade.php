<nav class="bg-jade w-full px-4 md:px-24 py-4">
    <div class="container">
        <div class="flex justify-between">
            <x-logo />
            @auth()
            <div class="flex">
                <x-profile-button />
                <x-logout />
            </div>
            @else
                <x-login />
            @endauth
        </div>
    </div>
</nav>