@extends('layout.layout')

@section('content')
        <div class="container px-8 pt-3 pb-60 md:px-28 mx-auto">
            @foreach ($category as $cat)
            <div>
                <div>
                    <p>{{ $cat->category }}</p>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                    @foreach ($menu as $mn)
                        @if ($mn->category == $cat->category)
                            <x-menu menuId="{{ $mn->id }}" name="{{ $mn->menu_name }}" image="{{ $mn->getImageURL() }}" />                    
                        @endif
                    @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div id="slideover-container" class="fixed inset-0 w-full h-full invisible">
            <div id="slideover-bg" onclick="toggleSlideOver()" class="absolute duration-200 ease-out transition-all inset-0 w-full h-full bg-gray-900 opacity-0"></div>
            <div id="slideover" class="p-5 absolute duration-200 ease-out transition-all bg-light bottom-0 h-3/4 lg:h-2/4 w-full translate-y-full">
                <div onclick="toggleSlideOver()" class="w-8 h-8 flex items-center justify-center absolute top-0 right-0 mt-5 mr-5">
                    <x-lucide-x class="text-dark" />
                </div>
                <div class="container flex justify-center mx-auto">
                    <div class="md:flex md:mr-5 md:mb-5 mr-0 mb-5">
                        <div class="w-64 h-64 rounded-lg">
                            <img src="./images/dorayaki.jpg" class="object-scale-down" alt="">
                        </div>
                        <div class="md:ml-5 md:mt-0 ml-0 mt-5 bg-jade">
                            <div>Product Name</div>
                            <div>Product Price</div>
                            <div>Product Description</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            function toggleSlideOver() {
                document.getElementById("slideover-container").classList.toggle("invisible");
                document.getElementById("slideover-bg").classList.toggle("opacity-0");
                document.getElementById("slideover-bg").classList.toggle("opacity-50");
                document.getElementById("slideover").classList.toggle("translate-y-full");
                var menuURL = $(this).data('url');
                console.log(menuURL);
            }

        </script>
@endsection
