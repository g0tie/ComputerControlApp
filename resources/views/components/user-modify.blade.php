@props(['user'])
<div class="">
    <form method="post" 
    action="{{ url('/users/' . $user->id) }}" 
    class="col-8 p-4 mx-auto bg-white rounded-lg d-flex flex-column shadow-sm">
    @csrf
        
        <h3 class="border-bottom">Modifier l'utilisateur</h3>
        <input type="hidden" name="_method" value="put" /> 
        <label>Prénom:</label>   
        <input  class="mb-2 form-control" type="text" name="firstname" value="{{ $user->firstname }}" />
        <label>Nom:</label>  
        <input  class="mb-2 form-control" type="text" name="lastname" value="{{ $user->lastname }}" />
        <label>Email:</label>  
        <input  class="mb-2 form-control" type="email" name="email" value="{{ $user->email }}" />

        <input class="btn btn-primary mt-2" type="submit" value="Valider" />
    </form>
</div>