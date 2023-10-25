        <!-- Repeat this product card for each product -->
        <div id="menu-card" onclick="toggleSlideOver({{$menuId}})" data-id="{{ $menuId}}" class="rounded-lg bg-maroon hover:cursor-pointer hover:bg-lightmaroon transition ease-in-out duration-100">
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

        <div id="slideover-container{{$menuId}}" class="fixed inset-0 w-full h-full invisible z-50">
            <div id="slideover-bg{{$menuId}}" onclick="toggleSlideOver({{$menuId}})" class="absolute duration-200 ease-out transition-all inset-0 w-full h-full bg-gray-900 opacity-0"></div>
            <div id="slideover{{$menuId}}" class="p-5 absolute duration-200 ease-out transition-all bg-light bottom-0 h-3/4 lg:h-2/4 w-full translate-y-full">
                <div onclick="toggleSlideOver({{$menuId}})" class="w-8 h-8 flex items-center justify-center absolute top-0 right-0 mt-5 mr-5">
                    <x-lucide-x class="text-dark" />
                </div>
                <div class="container flex justify-center mx-auto">
                    <div class="md:flex md:mr-5 md:mb-5 mr-0 mb-5">
                        <div class="w-64 h-64 mx-auto rounded-lg">
                            <img src="{{ $image }}" class="object-cover rounded-lg aspect-square" alt="{{$name}}">
                        </div>
                        <div class="md:ml-5 md:mt-0 ml-0 mt-5">
                            <div class="text-3xl mb-1 font-comfortaa font-semibold text-dark">{{$name}}</div>
                            <div class="text-xl font-comfortaa text-dark">Rp {{ number_format($price, 0, '.') }}</div>
                            <div class="text-md font-roboto text-dark max-w-xl">{{ $desc }}</div>
                            
                            {{-- @if ($admin) --}}
                                
                            <div class="flex justify-end">
                                <a href="" class="m-2 p-1 font-comfortaa bg-jade w-16 flex justify-center rounded-md">Edit</a>
                                <form action="" method="POST">
                                    @csrf
                                    <a href="" class="m-2 p-1 font-comfortaa bg-lightmaroon w-16 flex justify-center rounded-md">Delete</a>
                                </form>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- End of product card -->