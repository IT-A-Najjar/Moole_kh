<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Product') }}
        </h2>
    </x-slot>
    <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <x-input-label for="type_id" :value="__('Type')" />
        <select name="type_id" class="block mt-1 w-full" id="floatingSelect" aria-label="Floating label select example" style="border-color:rgb(0 0 0 / 0.1); border-radius: 5px;">
            <option selected>Open this select menu</option>
            @foreach($types as $type)
                <option value="{{$type->id}}"> type: {{$type->name}} |category: {{$type->category->name}}</option>
            @endforeach
        </select>
        <div>
            <x-input-label for="name" :value="__('Product Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name product" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="description" :value="__('Product description')" />
            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description product" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="price" :value="__('Product price')" />
            <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" step="any" required autocomplete="price product" />
            <x-input-error :messages="$errors->get('price')" class="mt-2" />
        </div>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image">

        <div class="flex items-center justify-end mt-4">
            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ml-4"  type="submit">
                Add Product
            </button>
        </div>
    </form>

</x-guest-layout>
