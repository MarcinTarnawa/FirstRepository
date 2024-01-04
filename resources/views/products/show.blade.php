<x-app-layout>
    <form method="GET" action="{{ route('products.show', $product->id) }}">

        <!-- Nazwa -->
        <div>
            <x-input-label for="name" :value="__('shop.product.name_product')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $product->name)" disabled autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Opis -->
        <div>
            <x-input-label for="description" :value="__('shop.product.description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description', $product->description)"  disabled autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- Ilosc -->
        <div>
            <x-input-label for="amount" :value="__('shop.product.amount')" />
            <x-text-input id="amount" class="block mt-1 w-full" type="number" min="1" name="amount" :value="old('amount', $product->amount)" disabled  autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>        

        <!-- Cena -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('shop.product.price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" min="0" name="price" :value="old('price', $product->price)" disabled autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <!-- Kategoria --> 
        <div class="form-group">
          <label>{{__('shop.product.category')}}</label>
                <select class="form-control input-sm" name="category_id" id="category" disabled> 
                    @if($product->hasCategory())
                        <option>{{$product->category->name}}</option>
                    @else
                        <option>{{__('shop.product.brak')}}</option>
                    @endif
                </select>
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
        </div>

        <!-- Grafika-->
        <div class="mt-4">
            <x-input-label for="image_path" :value="__('shop.product.image')" />
                @if(is_null($product->image_path))
                    <img class="container px-4 px-lg-5 mt-5" style="width: 500px"src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg"alt="Podgląd" />
                @else
                    <img class="container px-4 px-lg-5 mt-5" style="width: 500px" src="{{ asset('storage/' . $product->image_path) }}"alt="Podgląd" />
                @endif
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
        </div>
    </form>
</x-app-layout>
