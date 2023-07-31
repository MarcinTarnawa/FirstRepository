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
                <a href="{{ route('products.show', $product->id) }}">
                  <x-primary-button>
                    podglad
                  </x-primary-button>
                </a>
                <a href="{{ route('products.edit', $product->id) }}">
                  <x-primary-button>
                    Edit
                  </x-primary-button>
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

@section('js')
  const deleteUrl = "{{ url('products')}}";
@endsection

@section('js')
  <script src="{{ asset('js/delete.js') }}"> </script>
@endsection

</x-slot>
</x-app-layout>
