@props(['computer', 'users'])
<div class="card">
    <header class="card-header">{{ $computer->name }}</header>
    <div class="card-body">
        <p>Attribuer un utilisateur à ce poste</p>

        <form action="{{ url('/attributions') }}" method="post">@csrf
            <select class="form-control mb-2" name="user_id" required>
                <option>Sélectionnez un utilisateur</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->firstname}} {{$user->lastname}}</option>
                @endforeach
            </select>
            <input type="hidden" name="computer_id" value="{{ $computer->id }}" required/>

            <label>du:</mabel>
            <input type="date" name="starting_date" required/>

            <label>au:</mabel>
            <input type="date" name="expiration_date" />
            <input class="btn btn-success" type="submit" value="Attribuer" />
        </form>
    </div>
</div>