<form action="{{ route('logout') }}" method="post">
    @csrf
    <button type="submit">
        <div class=" ml-3 login flex p-1 hover:cursor-pointer bg-cream hover:bg-darkcream rounded-md">
            <x-iconsax-lin-logout class="h-6 w-6 mr-2 text-dark" />
        </div>
    </button>
</form>