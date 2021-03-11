@extends('admin.users.main')

@section('users')
    <x-user-card :user="$user"/>
@endsection