@extends('layout.admin')

@section('content')
<div class="container bg-light p-4">
    <p class="font-comfortaa font-semibold text-3xl mb-4">Menu</p>
    <div class="mb-4">
        <a href="/admin/menu/create" class="font-comfortaa p-2 rounded-md hover:bg-jade hover:text-dark text-lg mb-4 font-semibold bg-teal text-light">Create Menu</a>
    </div>
    @foreach ($category as $cat)
            <div class="mb-4">
                <div>
                    <p class="font-comfortaa text-3xl text-dark m-2">{{ $cat->category }}</p>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-6 gap-3">
                    @foreach ($menu as $mn)
                        @if ($mn->category == $cat->category)
                            <x-menu menuId="{{ $mn->id }}" name="{{ $mn->menu_name }}" image="{{ $mn->getImageURL() }}" desc="{{$mn->description}}" price="{{ $mn->price }}" />                    
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