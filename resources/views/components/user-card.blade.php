@props(['user'])
<div class="card">
    <div class="card-header">
        {{ $user->firstname }} {{ $user->lastname }}
    </div>

    <div class="card-body">
        <p>Email: {{ $user->email }}</p>

        <a 
        class=" p-2  bg-green rounded-lg text-white"
        href="{{ url('/users/' . $user->id  .'/edit') }}">Modifier</a>
    </div>
</div>