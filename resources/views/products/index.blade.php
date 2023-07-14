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
  <div class="row">
      <div class="col-6">
        <h1>Lista Produktów</h1>
      </div>
      <div class="col-6">
        <a class="ml-4" href="{{ route('products.create')}}">
          <button> Dodaj </button>
        </a>
      </div>
    <table>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Opis</th>
            <th scope="col">Ilość</th>
            <th scope="col">Cena</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        
        <tbody>
        @foreach($products as $product)
            <tr>
                <th scope="row">{{ $product->id }}</th>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->amount }}</td>
                <td>{{ $product->price }}</td>
                <td> 
                <a href="{{ route('products.edit', $product->id) }}">
                  <x-danger-button>
                    Edit
                  </x-danger-button>
                </a>
                <x-danger-button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                  X
                </x-danger-button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $products->links() }}
</div>
</h2>

</x-slot>
</x-app-layout>

@section('js')
  const deleteUrl = "{{ url('http://localhost/product')}}";
@endsection

@section('js')
  <script src="{{ asset('js/delete.js') }}"> </script>
@endsection

 <script>
    $(function() {
        $('.delete').click(function() {
          $.ajax({
            method: "DELETE",
//            url: "{{Url('users')}}" + $(this).data("id")
            url: "http://localhost/users/list" + $(this).data("id")
          })
          .done(function(response) {
            window.location.reload();
          })
          .fail(function(response) {
            alert('Error!!');
        });
      });
    });
</script>