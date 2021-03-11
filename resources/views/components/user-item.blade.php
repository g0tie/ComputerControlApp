@props(['user'])
<div class="d-flex justify-content-between bg-white rounded-lg row p-2 my-2">
    <p class="text-md font-weight-bold">{{ $user->firstname }} {{ $user->lastname }}</p>

<div class="d-flex justify-content-between">
    <a class="d-block py-2 px-3 mx-2 bg-blue rounded-lg text-white"
     href="{{ url('/users/' . $user->id) }}">Voir</a>
    <a 
    class="d-block py-2 px-3  mx-2  bg-green rounded-lg text-white"
    href="{{ url('/users/' . $user->id  .'/edit') }}">Modifier</a>

    <form class="m-0" action="{{ url('/users/' . $user->id) }}">
    @csrf
        <input type="hidden" name="_method" value="delete" />
        <input
        class="d-block py-2 px-3 h-100 mx-2 bg-red rounded-lg text-white border-0"
         type="submit" value="Supprimer" />
    </form>
    </div>
  
</div>