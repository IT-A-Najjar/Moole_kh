<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Product') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('product.update',['product'=>$product->id]) }}">
        @csrf
        @method('PUT')
        <div class="form-floating">
        <x-input-label for="name" :value="__('Type')" />
            <select name="type" class="block mt-1 w-full" id="floatingSelect" aria-label="Floating label select example" style="border-color:rgb(0 0 0 / 0.1); border-radius: 5px;">
                <option value="{{$product->type_id}}" selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Product Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$product->name" required autofocus autocomplete="name product" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- desctiption -->
        <div>
            <x-input-label for="desctiption" :value="__('Product desctiption')" />
            <x-text-input id="desctiption" class="block mt-1 w-full" type="text" name="desctiption" :value="$product->desctiption" required autofocus autocomplete="desctiption product" />
            <x-input-error :messages="$errors->get('desctiption')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="price" :value="__('Product price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="$product->price" step="any" required autocomplete="price product" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        <div class="mt-4">
            <x-input-label for="image" :value="__('Product image')" />
            <x-text-input id="image" class="block mt-1 w-full  hover:bg-gray-300 text-black font-bold py-2 px-4 rounded" type="file" name="image" :value="$product->image" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('create') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>