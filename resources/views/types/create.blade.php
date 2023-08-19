<x-guest-layout>
    <form method="POST" action="{{ route('type.store') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name Category')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <div class="">
            <x-input-label for="category_id" :value="__('Category Name')" />
                <select name="category_id" class="block mt-1 w-full" id="floatingSelect" aria-label="Floating label select example" style="border-radius: 5px;">
                    <option selected>Open this select menu</option>
                    @foreach($Categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>