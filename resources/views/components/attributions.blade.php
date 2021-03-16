@props(['attributions'])
<div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Utilisateur</th>
      <th scope="col">Poste</th>
      <th scope="col">Date de début</th>
      <th scope="col">Date de fin</th>
    </tr>
  </thead>

    <tbody>
    @forelse($attributions as $attribution) 
            <tr>
                <td>{{ $attribution['username'] }}</td>
                <td>{{ $attribution['computername'] }}</td>
                <td>{{ $attribution['starting_date'] }}</td>
                <td>{{ $attribution['expiration_date'] }}</td>
                <td>
                    <form class="m-0" action="{{ url('/attributions/' . $attribution['id']) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete" />
                        <input class="btn btn-danger" type="submit" value="Supprimer" />
                    </form>
                </td>
            </tr>
            @empty

            <tr>
                <td>No Attributions</td>
            </tr>

        @endforelse
    </tbody>

</table>
</div>