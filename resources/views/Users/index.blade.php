<x-app-layout>
<x-slot name="header">
<h2>
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<style>
table, td, th {
  border: 2px solid black;
}

table {
  border-collapse: collapse;
  width: 100%;
}

td {
  text-align: center;
}
</style>         
    
<div class="container">
    <table>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Numer telefonu</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->email }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->phone_number }}</td>
                <td> 
                <x-danger-button class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}">
                  X
                </x-danger-button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
{{ $users->links() }}
</div>
</h2>

@section('js')
  const deleteUrl = "{{ url('http://localhost/users/list')}}";
@endsection

@section('js')
  <script src="{{ asset('js/delete.js') }}"> </script>
@endsection

</x-slot>
</x-app-layout>