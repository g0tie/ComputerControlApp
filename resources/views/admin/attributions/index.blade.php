@extends('admin.layout')

@section('title')
    Attributions
@endsection

@section('content')
    <h3>Liste des attributions</h3>
    @if(isset($attributions))
    {{-- <x-attributions :attributions="$attributions" :users="$available_users" :computers="$available_computers" /> --}}
    @endif
    <hr />

    <h3>Postes informatiques disponibles:</h3>

    @if(isset($available_computers))

        @foreach($available_computers as $computer)
            <x-available-computer :computer="$computer" :users="$available_users" /> 
          
        @endforeach
        
    @endif


@endsection