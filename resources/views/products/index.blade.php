<x-app-layout>
<x-slot name="header">
  
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="product menu" />
        <meta name="author" content="Marcin" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/sass/app.scss', 'resources/js/app.js', 'resources/js/delete.js'])
    </head>
    
    <body>
        <!-- Dodaj produkt -->
        <a class="ml-2" href="{{ route('products.create')}}">
          <button> <i class="fa-solid fa-plus"> Dodaj nowy produkt</i></button>
        </a>
        <!-- Filtruj-->
        <!-- <form class="sidebar-filter">
        <h6 class="text-uppercase font-weight-bold mb-3">{{__('shop.product.categories')}}</h6>
        @foreach($categories as $category)
          <div class="mt-2 mb-2 pl-2">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="category-{{ $category->id }}">
              <label class="custom-control-label" for="category-{{ $category->id }}"> {{ $category->name}} </label>
            </div>
          </div>
        @endforeach
        <a id="filter-button">
        <x-primary-button class="ml-2">
          <i class="fa-solid fa-magnifying-glass">{{ __('shop.button.filter') }}</i>
        </x-primary-button>
        @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
        @endif
        </a>
        </form> -->

        <!-- <form class="sidebar-filter">
             <h6 class="text-uppercase font-weight-bold mb-3">{{__('shop.product.categories')}}</h6>
            @foreach($categories as $category)
                <div class="mt-2 mb-2 pl-2">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="filter[categories][]" id="category-{{ $category->id }}" value="{{ $category->id }}">
                        <label class="custom-control-label" for="category-{{ $category->id }}"> {{ $category->name}} </label>
                    </div>
                </div>
            @endforeach
        <div class="price-filter-control">
            <input type="number" class="form-control w-50 pull-right mb-2" placeholder="50" name="filter[price_min]" id="price-min-control">
            <input type="number" class="form-control w-150 pull-left mb-2" placeholder="150" name="filter[price_max]" id="price-max-control">
        </div>
        <a id="filter-button">
        <x-primary-button class="ml-2">
            <i class="fa-solid fa-magnifying-glass">{{ __('shop.button.filter') }}</i>
        </x-primary-button></br>
        </a>
        </form> -->
        
        <!-- Section-->
        <!-- <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-3 row-cols-md-3 row-cols-xl-4 justify-content-center" id="product-wrapper">
                @foreach($products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                              <!- Product image ->
                                @if(is_null($product->image_path))
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="Podgląd" />
                                @else
                                <img class="card-img-top" src="{{ asset('storage/' . $product->image_path) }}"alt="Podgląd" />
                                @endif
                            <!- Product details->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!- Product name->
                                    <h5 class="fw-bolder">{{ $product->name }}</h5>
                                    <!- Product price->
                                    {{ $product->description }}<br>
                                    {{__('shop.product.price')}} : {{ $product->price }}$
                                </div>
                            </div>
                            <!- Product actions->
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
        </section> -->
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

    @section('js')
      <script src="{{ asset('js/welcome.js') }}"> </script>
    @endsection
  </body>

</x-slot>
</x-app-layout>
