@extends('admin.users.main')
@section('users')
    @if($users)
        @foreach($users as $user)
            <x-user-item :user="$user"/>
        @endforeach
    @endif
@endsection