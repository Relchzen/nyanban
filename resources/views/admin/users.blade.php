@extends('layout.admin')

@section('content')
<div class="container bg-light p-4">
    <p class="font-comfortaa font-semibold text-3xl">Users</p>

    <div class="my-4">
        <a href="{{route('user.create')}}" class="p-2 font-comfortaa text-lg rounded-lg hover:text-light bg-jade">
            Create User
        </a>
    </div>
    <div>
        <table class="w-full table-auto">
            <tr>
                <th>
                    First Name
                </th>
                <th>
                    Last Name
                </th>
                <th>
                    Email
                </th>
                <th>
                    Username
                </th>
                <th>
                    Gender
                </th>
                <th>
                    Birthdate
                </th>
                <th>
                    Admin
                </th>
                <th>
                    Action
                </th>
            </tr>
            @foreach ($users as $user)
            
            <tr>
                <td>{{$user->first_name}}</td>
                <td>{{$user->last_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->gender}}</td>
                <td>{{$user->birthdate}}</td>
                <td>{{$user->is_admin}}</td>
                <td>
                    <div>
                        <a href="{{route('user.edit', $user->id)}}">
                            Edit
                        </a>
                        <button onclick="toggleDeleteModal({{$user->id}})">
                            delete
                        </button>
                    </div>
                </td>
            </tr>
            @endforeach
        </table>
        {{ $users->links() }}
    </div>
</div>

@foreach ($users as $user)
    
    <div id="modal-container-{{$user->id}}" class="fixed invisible z-50 w-full h-full inset-0">
        <div id="modal-background-{{$user->id}}" onclick="toggleDeleteModal({{$user->id}})" class="absolute w-full h-full fixed bg-gray-900 opacity-0 duration-100 ease-out transition-all">
        </div>
        <div id="modal-{{$user->id}}" class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-light h-min w-72 duration-200 ease-out transition-all rounded-lg scale-0">
            <div id="modal-header" class="m-4 text-xl font-comfortaa">
                Warning
            </div>
            <div id="modal-body" class="p-4 text-md font-comfortaa">
                Are you sure you want to delete "{{ $user->first_name . ' ' . $user->last_name }}"?
            </div>
            <div class="flex justify-around p-4">
                <form action="{{ route('user.delete', $user->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <button class="bg-maroon p-2 rounded-md font-comfortaa text-light">
                        Yes, Delete
                    </button>
                </form>
                <button class="p-2 bg-gray-700 rounded-md font-comfortaa text-light" onclick="toggleDeleteModal({{$user->id}})">
                    No, Cancel
                </button>
            </div>
        </div>
    </div>
    
@endforeach

<script type="text/javascript">
    function toggleDeleteModal(id) {
        document.getElementById("modal-container-"+id).classList.toggle("invisible");
        document.getElementById("modal-background-"+id).classList.toggle("opacity-0");
        document.getElementById("modal-background-"+id).classList.toggle("opacity-50");
        document.getElementById("modal-"+id).classList.toggle("scale-0");
    }
</script>
@endsection