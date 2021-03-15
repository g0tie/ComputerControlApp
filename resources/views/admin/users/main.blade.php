@extends('admin.layout')

@section('title')
   Utilisateurs
@endsection

@section('content')
<div>
   @if($errors->any)
         @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"/>
         @endforeach
   @endif 

   @if(Session::has('status'))
      <x-alert type="success" :message="Session::get('status')" />
   @endif

   @yield('users')
</div>
@endsection