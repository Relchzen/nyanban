@extends('admin')

@section('content')

<div class="container mt-4 ml-4 bg-gray-100">
    <p class="text-dark text-3xl font-comfortaa font-semibold mb-8">Create User</p>
    <form action="{{route('user.store')}}" method="POST">
        @csrf
        @method('put')
        <div class="flex flex-col w-min">
            <div class="flex">
                <input type="text" name="first_name" id="first_name" class="mb-3 p-2 mr-4 rounded-md shadow" placeholder="First Name" autocomplete="off" required />
                <input type="text" name="last_name" id="last_name" class="mb-3 p-2 ml-4 rounded-md shadow" placeholder="Last Name" autocomplete="off" required />
            </div>
            <input type="text" name="username" id="username" class="shadow mb-3 p-2 rounded-md" placeholder="Username" autocomplete="off" required/>
            <input type="date" name="birthdate" id="birthdate" class="mb-3 p-2 rounded-md shadow" required />
            <div class="flex justify-around">
                <div>
                    <input type="radio" name="gender" id="gender1" value="male" 
                    class="hover:cursor-pointer" required>
                    <label for="gender1" class="hover:cursor-pointer">Male</label>
                </div>
                <div>

                    <input type="radio" name="gender" id="gender2" value="female" class="hover:cursor-pointer" required>
                    <label for="gender2" class="hover:cursor-pointer">Female</label>
                </div>
            </div>
        
            <input type="text" name="email" id="email" class="shadow mb-3 p-2 rounded-md" placeholder="Email address" autocomplete="off" required />
            <input type="password" name="password" id="password" class="shadow mb-3 p-2 rounded-md" placeholder="Password" autocomplete="off" required />
            <input type="password" name="password_confirmation" id="confirm-password" class="shadow mb-3 p-2 rounded-md" placeholder="Confirm Password" autocomplete="off" required />       
            <button type="submit" class="text-center p-2 hover:text-light bg-teal rounded-md my-2 scale-95 hover:scale-100 transition ease-in-out duration-100">Add User</button>
        </div>
        </form>
</div>

@endsection