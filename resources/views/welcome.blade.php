@extends('layout.layout')

@section('content')
        <div class="container px-8 pt-3 pb-60 md:px-28 mx-auto">
            @foreach ($category as $cat)
            <div class="mb-8">
                <div>
                    <p class="font-comfortaa text-3xl text-dark m-2">{{ $cat->category }}</p>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
                    @foreach ($menu as $mn)
                        @if ($mn->category == $cat->category)
                            <x-menu menuId="{{ $mn->id }}" name="{{ $mn->menu_name }}" image="{{ $mn->getImageURL() }}" desc="{{$mn->description}}" price="{{ $mn->price }}" admin="{{ $admin }}" />                    
                        @endif
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <script>
            function toggleSlideOver(menuId) {
                id = menuId;
                console.log(menuId);
                document.getElementById("slideover-container"+id).classList.toggle("invisible");
                document.getElementById("slideover-bg"+id).classList.toggle("opacity-0");
                document.getElementById("slideover-bg"+id).classList.toggle("opacity-50");
                document.getElementById("slideover"+id).classList.toggle("translate-y-full");
                
                
            }
        </script>
@endsection
