@extends('admin.users.main')
@section('users')
    <a 
    href="{{ url('/users/create')  }}" 
    class="py-2 text-center border border-dark d-block rounded-lg text-dark" 
    style="width:120px">+ Create User</a>
    @if($users)
        @foreach($users as $user)
            <x-user-item :user="$user"/>
        @endforeach
    @endif
@endsection