@extends('layout.admin')

@section('content')
<div class="container bg-light p-4">
    <p class="font-comfortaa font-semibold text-3xl mb-4">Menu</p>
    <div class="mb-4">
        <a href="/admin/menu/create" class="font-comfortaa p-2 rounded-md hover:bg-jade hover:text-dark text-lg mb-4 font-semibold bg-teal text-light">Create Menu</a>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3">
        @foreach ($menu as $mn)
        <x-menu menuId="{{ $mn->id }}" name="{{ $mn->menu_name }}" image="{{ $mn->getImageURL() }}" />
        @endforeach
    </div>
</div>

<div id="slideover-container" class="fixed inset-0 w-full h-full invisible">
    <div id="slideover-bg" onclick="toggleSlideOver()" class="absolute duration-200 ease-out transition-all inset-0 w-full h-full bg-gray-900 opacity-0"></div>
    <div id="slideover" class="absolute duration-200 ease-out transition-all bg-light bottom-0 h-3/5 lg:h-2/5 w-full translate-y-full">
        <div onclick="toggleSlideOver()" class="w-8 h-8 flex items-center justify-center absolute top-0 right-0 mt-5 mr-5">
            <x-lucide-x class="text-dark" />
        </div>
    </div>
</div>

<script>
    function toggleSlideOver() {
        document.getElementById("slideover-container").classList.toggle("invisible");
        document.getElementById("slideover-bg").classList.toggle("opacity-0");
        document.getElementById("slideover-bg").classList.toggle("opacity-50");
        document.getElementById("slideover").classList.toggle("translate-y-full");
    }
</script>
@endsection