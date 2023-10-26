@extends('layout.admin')

@section('content')
    @if($editing ?? false)
    <div class="container bg-light pt-4 pl-4 pr-4 pb-12 font-roboto">
        <p class="font-comfortaa font-semibold text-3xl mb-4">Create Menu</p>
        <form action="{{ route('menu.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-4 grid grid-cols-8">              
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 col-span-full">
                    <div class="md:col-span-4">
                        <label for="picture" class="block text-sm font-medium leading-6 text-gray-900">Menu Photo</label>
                        <div class="mt-2">
                        <input type="file" name="picture" id="picture" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="md:col-span-4">
                        <label for="menu_name" class="block text-sm font-medium leading-6 text-gray-900">Menu Name</label>
                        <div class="mt-2">
                        <input type="text" name="menu_name" id="menu_name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="md:col-span-3">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 pl-12 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                        <div class="mt-2">
                          <select id="category" name="category" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>Select a category</option>
                            @foreach ($category as $ctgr)
                            <option value="{{ $ctgr->category }}">{{ $ctgr->category }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                    <div class="md:col-span-4 mt-6">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mb-6 relative">
                            <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>  
                </div>
            </div>
            <button type="submit" class="flex flex-none justify-center bg-teal p-2 hover:bg-jade hover:text-light rounded-lg">Add Menu</button>             
            </form>
    </div>



    @else



    <div class="container bg-light pt-4 pl-4 pr-4 pb-12 font-roboto">
        <p class="font-comfortaa font-semibold text-3xl mb-4">Edit Menu</p>
        <form action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-4 grid grid-cols-8">              
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 col-span-full">
                    <div class="md:col-span-4">
                        <label for="picture" class="block text-sm font-medium leading-6 text-gray-900">Menu Photo</label>
                        <div  class="w-3/5 aspect-square p-4 shadow rounded-lg mb-3">
                            <img src="{{$menu->getImageURL() }}" alt="" class="rounded-md">
                        </div>

                        <div class="mt-2">
                        <input type="file" name="picture" id="picture" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $menu->picture }}">
                        </div>
                    </div>
                    <div class="md:col-span-4">
                        <label for="menu_name" class="block text-sm font-medium leading-6 text-gray-900">Menu Name</label>
                        <div class="mt-2">
                        <input type="text" name="menu_name" id="menu_name" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ $menu->menu_name }}">
                        </div>
                    </div>
                    <div class="md:col-span-3">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <span class="text-gray-500 sm:text-sm">Rp</span>
                            </div>
                            <input type="number" name="price" id="price" class="block w-full rounded-md border-0 py-1.5 pl-12 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{$menu->price }}"/>
                        </div>
                    </div>

                    <div class="md:col-span-2">
                        <label for="category" class="block text-sm font-medium leading-6 text-gray-900">Category</label>
                        <div class="mt-2">
                          <select id="category" name="category" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option disabled>Select a category</option>
                            @foreach ($category as $ctgr)
                            @if($ctgr->category == $menu->category)
                            <option value="{{ $ctgr->category }}" selected>{{ $ctgr->category }}</option>
                            @else
                            <option value="{{ $ctgr->category }}">{{ $ctgr->category }}</option>
                            @endif
                            @endforeach
                          </select>
                        </div>
                      </div>
                    <div class="md:col-span-4 mt-6">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mb-6 relative">
                            <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-0 py-1.5 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $menu->description}}</textarea>
                        </div>
                    </div>  
                </div>
            </div>
            <button type="submit" class="flex flex-none justify-center bg-teal py-2 px-4 hover:bg-jade hover:text-light rounded-lg">Save</button>             
            </form>
    </div>

    @endif
@endsection