<x-app-layout>
    <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('shop.product.name_product')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" maxlength="50" :value="old('name', $product->name)" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- opis -->
        <div>
            <x-input-label for="description" :value="__('shop.product.description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" maxlength="500" :value="old('description', $product->description)" required autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- ilosc -->
        <div>
            <x-input-label for="amount" :value="__('shop.product.amount')" />
            <x-text-input id="amount" class="block mt-1 w-full" type="number" min="1" name="amount" :value="old('amount', $product->amount)" required autofocus autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>        

        <!-- cena -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('shop.product.price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" min="0" name="price" :value="old('price', $product->price)" required autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="image_path" :value="__('shop.product.image')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"/>
                             @if(is_null($product->image_path))
                            @else
                                <img class="container px-4 px-lg-5 mt-5" style="width: 500px" src="{{ asset('storage/app/' . $product->image_path) }}"alt="Podgląd" />
                            @endif
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('shop.button.save') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
