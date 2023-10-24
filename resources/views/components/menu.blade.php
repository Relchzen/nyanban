        <!-- Repeat this product card for each product -->
        <div onclick="toggleSlideOver()" data-url="{{ route('menu.show', $menuId )}}" class="rounded-lg bg-maroon hover:cursor-pointer hover:bg-lightmaroon transition ease-in-out duration-100">
            <div>
                <div class="flex overflow-hidden relative p-2">
                    <div class="rounded-lg">
                        <img src="{{ $image }}" alt="Product Image" class="object-cover aspect-square rounded-lg">
                    </div>
                </div>
                <div class="mx-4 mb-2 flex flex-col">
                    <h2 class="text-light font-comfortaa">{{ $name }}</h2>
                </div>
            </div>
        </div>

        <!-- End of product card -->