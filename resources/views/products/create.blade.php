<x-app-layout>
    <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- opis -->
        <div>
            <x-input-label for="description" :value="__('Opis')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')"  autofocus autocomplete="description" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <!-- ilosc -->
        <div>
            <x-input-label for="amount" :value="__('Ilość')" />
            <x-text-input id="amount" class="block mt-1 w-full" type="number" min="1" name="amount" :value="old('amount')" required autofocus autocomplete="amount" />
            <x-input-error :messages="$errors->get('amount')" class="mt-2" />
        </div>        

        <!-- cena -->
        <div class="mt-4">
            <x-input-label for="price" :value="__('Cena')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" step="0.01" min="0" name="price" :value="old('price')" required autocomplete="price" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="image_path" :value="__('Obrazek')" />
            <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"/>
        </div>

        <div class="flex items-center justify-end mt-4">
            <!-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a> -->

            <x-primary-button class="ml-4">
                {{ __('zapisz') }}
            </x-primary-button>
        </div>
    </form>
</x-app-layout>
