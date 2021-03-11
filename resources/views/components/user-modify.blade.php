@props(['user'])
<div class="card">
    <form action="{{ url('/users/' . $user->id) }}">
    @csrf
        <input type="hidden" name="_method" value="put" />    
        <input type="text" name="firstname" value="{{ $user->firstname }}" />
        <input type="text" name="lastname" value="{{ $user->lastname }}" />
        <input type="email" name="email" value="{{ $user->email }}" />

        <input class="btn btn-primary" type="submit" value="valider" />
    </form>
</div>