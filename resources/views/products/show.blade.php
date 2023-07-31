<x-app-layout>
    <form method="GET" action="{{ route('products.show', $product->id) }}">

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name', $product->name)" disabled autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- opis -->
        <div>
            <x-input-label for="description" :value="__('Opis')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description', $product->description)"  disabled autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- ilosc -->
        <div>
            <x-input-label for="amount" :value="__('Ilość')" />
            <x-text-input id="amount" class="block mt-1 w-full" type="number" min="1" name="amount" :value="old('amount', $product->amount)" disabled  autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>        

        <!-- cena -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Cena')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" min="0" name="price" :value="old('price', $product->price)" disabled autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
        </div>
    </form>
</x-app-layout>
