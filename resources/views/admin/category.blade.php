@extends('layout.admin')

@section('content')
<div class="container bg-light p-4">
    <p class="font-comfortaa font-semibold text-3xl mb-4">Category</p>
    <div class="m-4">
        <p class="font-comfortaa text-lg mb-4">Add Category</p>
        <form action="{{ route('category.create') }}" method="post">
            @csrf
            <div class="flex">
                <input type="text" class="rounded-lg w-64 p-2 font-roboto outline outline-offset-0 outline-1 outline-darkcream mr-3" name="inputCategory" id="inputCategory" placeholder="Add a new category" />
                <button class="bg-teal text-white p-2 rounded-lg" type="submit">Add</button>
            </div>
        </form>
    </div>
    <div class="m-4 relative w-96 overflow-x-auto rounded-md shadow">
        <table class="text-left text-lg font-roboto table-auto table-auto w-96">
            <thead class="border border-2 font-medium border-neutral-500">
                <tr>
                    <th scope="col" class="border border-2 w-3/5 p-2 border-dark">Category</th>
                    <th scope="col" class="border border-2 p-2 border-dark">Action</th>
                </tr>
            </thead>
            <tbody class="border border-2 border-neutral-500">
                @foreach ($category as $ctgr)
                    <tr>
                        <td class="border w-3/5 border-2 p-2 border-dark">
                            {{ $ctgr->category }}
                        </td>
                        <td class="border border-2 p-2 border-dark text-center">
                            <div class="flex">
                                <button onclick="toggleSlideOver()" class="hover:cursor-pointer rounded-md py-1 px-2 ml-2 bg-jade text-teal hover:text-light">Edit</button>
                                <form action="{{route("category.destroy", $ctgr->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="hover:cursor-pointer rounded-md p-1 mx-2 bg-lightmaroon text-dark hover:text-light">Delete</button>
                                </form>
                            </div>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
</div>
@endsection