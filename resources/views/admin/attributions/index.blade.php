@extends('admin.layout')

@section('title')
    Attributions
@endsection

@section('content')

    @if($errors->any)
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"/>
        @endforeach
    @endif 

    @if(Session::has('status'))
      <x-alert type="success" :message="Session::get('status')" />
   @endif


    <h3>Liste des attributions</h3>
    @if(isset($attributions))
    <x-attributions :attribs="$attributions" :users="$available_users" :computers="$available_computers" />
    @endif
    <hr />

    <h3>Postes informatiques disponibles:</h3>

    @if(isset($available_computers))
        @foreach($available_computers as $computer)
            <x-available-computer :computer="$computer" :users="$available_users" /> 
          
        @endforeach
        
    @endif


@endsection