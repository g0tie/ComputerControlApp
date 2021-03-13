@props(['attributions', 'users', 'computers'])
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
    @foreach($attributions as $attribution)
        @php
            $username = '';
            $computername = '';
        @endphp
            
        @foreach($users as $user) 
            @if($user->id === attribution->user_id) 
                $username = $user->name
            @endif
        @endforeach

        @foreach($computers as $computer) 
            @if ($computer->id === attribution->computer_id) 
                $computername = $computer->name;
            @endif
        @endforeach
      
        <tr>
            <td>{{ $username }}</td>
            <td>{{ $computername }}</td>
            <td>{{ $attribution->starting_date }}</td>
            <td>{{ $attribution->expiration_date</td>
        </tr>
    @endforeach
  </tbody>
</table>

