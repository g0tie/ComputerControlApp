@extends('admin.users.main')

@section('users')
    <x-user-modify :user="$user"/>
@endsection