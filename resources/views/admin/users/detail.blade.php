@extends('admin')

@section('content')

<div class="container mt-4 ml-4">
    <p class="text-dark text-3xl font-comfortaa font-semibold mb-8">Edit User</p>
    <form action="{{route('user.update', $user->id)}}" method="POST">
        @csrf
        @method('post')
        <div class="flex flex-col w-min">
            <div class="flex">
                <input type="text" name="first_name" id="first_name" class="mb-3 p-2 mr-4 rounded-md shadow" placeholder="First Name" autocomplete="off" value="{{$user->first_name}}" />
                <input type="text" name="last_name" id="last_name" class="mb-3 p-2 ml-4 rounded-md shadow" placeholder="Last Name" autocomplete="off" value="{{ $user->last_name }}" />
            </div>
            <input type="text" name="username" id="username" class="shadow mb-3 p-2 rounded-md" placeholder="Username" autocomplete="off" value="{{ $user->username }}"/>
            <input type="date" name="birthdate" id="birthdate" class="mb-3 p-2 rounded-md shadow" value="{{$user->birthdate}}" />
            <div class="flex justify-around">
                <div>
                    @if ($user->gender == 'male')
                    <input type="radio" name="gender" checked id="gender1" value="male" class="hover:cursor-pointer">
                    @else                    
                    <input type="radio" name="gender" id="gender1" value="male" class="hover:cursor-pointer">
                    @endif
                    <label for="gender1" class="hover:cursor-pointer">Male</label>
                </div>
                <div>
                    @if ($user->gender == 'female')
                    <input type="radio" name="gender" checked id="gender2" value="female" class="hover:cursor-pointer">
                    @else
                    <input type="radio" name="gender" id="gender2" value="female" class="hover:cursor-pointer">

                    @endif
                    <label for="gender2" class="hover:cursor-pointer">Female</label>
                </div>
            </div>
        
            <input type="text" name="email" id="email" class="shadow mb-3 p-2 rounded-md" placeholder="Email address" autocomplete="off" value="{{$user->email}}" />
            <div>
                <label for="is_admin" class="ml-2 mr-4 font-comfortaa">Admin Authority</label>
                @if ($user->is_admin == 1)
                <input type="checkbox" name="is_admin" id="is_admin" checked>
                @else
                <input type="checkbox" name="is_admin" id="is_admin">

                @endif
            </div>
            <button type="submit" class="text-center p-2 hover:text-light bg-teal rounded-md my-2 scale-95 hover:scale-100 transition ease-in-out duration-100">Edit User</button>
        </div>
        </form>
</div>

@endsection