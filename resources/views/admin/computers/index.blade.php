@extends('admin.layout')

@section('title')
    Postes informatique
@endsection

@section('content')
<div id="app">
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