<div class="">
  <form method="post" action="{{ url('/users')  }}" class="d-flex flex-column bg-white p-4 col-6 mx-auto shadow-sm">
  @csrf
        
        <label>Prénom:</label>   
        <input  class="mb-2 form-control" type="text" name="firstname" required/>
        <label>Nom:</label>  
        <input  class="mb-2 form-control"type="text" name="lastname" required />
        <label>Email:</label>  
        <input  class="mb-2 form-control" type="email" name="email"  required/>

        <label>Mot de passe:</label>  
        <input  class="mb-2 form-control" type="password" name="password" required />

        <label>Confirmer le mot de passe:</label>  
        <input  class="mb-2 form-control" type="password" name="password_confirmation" required/>


        <input class="btn btn-primary mt-2" type="submit" value="Créer" />
  </form>
</div>