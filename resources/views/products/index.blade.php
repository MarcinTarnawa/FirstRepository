<x-app-layout>
<x-slot name="header">
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <a class="ml-2" href="{{ route('products.create')}}">
          <button> Dodaj nowy produkt </button>
        </a>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" /> -->
        <!-- Core theme CSS (includes Bootstrap)-->
        <!-- <link href="css/styles.css" rel="stylesheet" /> -->
         <!-- Scripts -->
         @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js', 'resources/js/delete.js'])
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#!">All Products</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                                <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-3 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                                <!-- Product image-->
                                @if(is_null($product->image_path))
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Podgląd" />
                                @else
                                <img class="card-img-top" src="{{ asset('storage/' . $product->image_path) }}"alt="Podgląd" />
                                @endif
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!-- Product price-->
                                    {{ $product->description }}<br>
                                    {{__('shop.product.price')}} : {{ $product->price }}$
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('products.show', $product->id) }}">{{__('shop.product.view')}}</a></div>
                            </div>
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('products.edit', $product->id) }}">{{__('shop.product.edit')}}</a></div>
                            </div>
                            <x-danger-button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                  {{__('shop.product.delete')}}
                </x-danger-button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
        <!-- Core theme JS-->
        <!-- <script src="js/scripts.js"></script> -->
    </body>

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
        <a class="ml-3" href="{{ route('products.create')}}">
          <button> Dodaj </button>
        </a>
      </div>
    <table>
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">{{__('shop.product.name_product')}}</th>
            <th scope="col">{{__('shop.product.description')}}</th>
            <th scope="col">{{__('shop.product.amount')}}</th>
            <th scope="col">{{__('shop.product.price')}}</th>
            <th scope="col">{{__('shop.product.category')}}</th>
            <th scope="col">{{__('shop.product.action')}}</th>
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
                <td>@if($product->hasCategory()){{ $product->category->name }}@endif</td>
                <td> 
                <a href="{{ route('products.show', $product->id) }}">
                  <x-primary-button>
                    {{__('shop.product.view')}}
                  </x-primary-button>
                </a>
                <a href="{{ route('products.edit', $product->id) }}">
                  <x-primary-button>
                  {{__('shop.product.edit')}}
                  </x-primary-button>
                </a>
                <x-danger-button class="btn btn-danger btn-sm delete" data-id="{{ $product->id }}">
                {{__('shop.product.delete')}}
                </x-danger-button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
{{ $products->links() }}
</div>

@section('js')
  const deleteUrl = "{{ url('products')}}";
  const confirmdelete = "{{ __('shop.confirmdelete')}}";
@endsection

@section('js')
  <script src="{{ asset('js/delete.js') }}"> </script>
@endsection

</x-slot>
</x-app-layout>
