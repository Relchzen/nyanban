        <!-- Repeat this product card for each product -->
        <div id="menu-card" onclick="toggleSlideOver({{$menuId}})" data-id="{{ $menuId}}" class="rounded-lg bg-maroon hover:cursor-pointer hover:bg-lightmaroon transition ease-in-out duration-100">
            <div>
                <div class="flex overflow-hidden relative p-2">
                    <div class="rounded-lg">
                        <img src="{{ $image }}" alt="Product Image" class="object-cover aspect-square rounded-lg">
                    </div>
                </div>
                <div class="mx-4 mb-2 flex flex-col">
                    <p class="text-light text-sm font-comfortaa">{{ $name }}</p>
                </div>
            </div>
        </div>

        <div id="slideover-container{{$menuId}}" class="fixed inset-0 w-full h-full invisible z-30">
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
                            
                            @if (auth()->user())
                            <div>
                                <button class="p-2 font-comfortaa flex justify-center rounded-3xl bg-jade">Add</button>
                            </div>
                            @if (auth()->user()->is_admin)
                            <div class="flex justify-end">
                                <a href="{{route('menu.edit', $menuId)}}" class="m-2 p-1 font-comfortaa bg-jade w-16 flex justify-center rounded-md">Edit</a>
                                <button onclick="toggleDeleteModal({{$menuId}})" class="m-2 p-1 font-comfortaa bg-lightmaroon w-16 flex justify-center rounded-md">Delete</button>
                            </div>
                            @endif
                            @else
                            <div class="flex justify-end">
                                <a href="/login" class="p-2 font-comfortaa flex justify-center rounded-3xl bg-jade">
                                    Add
                                </a>

                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-container-{{$menuId}}" class="fixed invisible z-50 w-full h-full inset-0">
            <div id="modal-background-{{$menuId}}" onclick="toggleDeleteModal({{$menuId}})" class="absolute w-full h-full fixed bg-gray-900 opacity-0 duration-100 ease-out transition-all">
            </div>
            <div id="modal-{{$menuId}}" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-light h-min w-72 duration-200 ease-out transition-all rounded-lg scale-0">
                <div id="modal-header" class="m-4 text-xl font-comfortaa">
                    Warning
                </div>
                <div id="modal-body" class="p-4 text-md font-comfortaa">
                    Are you sure you want to delete "{{ $name }}"?
                </div>
                <div class="flex justify-around p-4">
                    <form action="{{ route('menu.delete', $menuId)}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="bg-maroon p-2 rounded-md font-comfortaa text-light">
                            Yes, Delete
                        </button>
                    </form>
                    <button class="p-2 bg-gray-700 rounded-md font-comfortaa text-light" onclick="toggleDeleteModal({{$menuId}})">
                        No, Cancel
                    </button>
                </div>
            </div>
        </div>

        <!-- End of product card -->