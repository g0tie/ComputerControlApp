@props(['user'])
<div class="card">
    <h3 class="border-bottom bg-white p-2">Infos sur l'utilisateur:</h3>
    <div class="card-header">
        <p>Nom: {{ $user->firstname }} </p>
       <p> Prénom:{{ $user->lastname }}</p>
    </div>

    <div class="card-body">
        <p>Email: {{ $user->email }}</p>

        <a 
        class=" p-2  bg-green rounded-lg text-white"
        href="{{ url('/users/' . $user->id  .'/edit') }}">Modifier</a>
    </div>
</div>