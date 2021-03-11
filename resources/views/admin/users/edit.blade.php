@extends('admin.users.main')

@section('user')
    <x-user-modify :user="$user"/>
@endsection