@extends('admin.layout')

@section('title')
    Postes informatique
@endsection

@section('content')
<div id="app">
    @if($errors->any)
        @foreach($errors->all() as $error)
            <x-alert type="danger" :message="$error"/>
        @endforeach
    @endif 

    @if(Session::has('status'))
      <x-alert type="success" :message="Session::get('status')" />
   @endif

    <make-computer></make-computer>
    @foreach($computers as $computer)

    @php
        $computer_object = json_encode($computer)
    @endphp

        <computer-item v-bind:computer="{{ $computer_object }}" ></computer-item>
        
    @endforeach
</div>
@endsection

@section('scripts')
<script src="/js/app.js"></script>
@endsection