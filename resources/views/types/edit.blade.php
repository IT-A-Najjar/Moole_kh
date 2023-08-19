<x-guest-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Type') }}
        </h2>
    </x-slot>
<form method="POST" action="{{route('type.update',['type' => $type->id])}}">
    @csrf
    @method('PUT')
    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name Type')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$type->name" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div>
        <div class="">
        <x-input-label for="category_id" :value="__('Category Name')" />
            <select name="category_id" class="block mt-1 w-full" id="floatingSelect" aria-label="Floating label select example" style="border-radius: 5px;">
                <option value="{{$type->Category->id}}" selected>{{$type->Category->name}}</option>
                @foreach($Categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="flex items-center justify-end mt-4">
        <x-primary-button class="ml-4">
            {{ __('Edit') }}
        </x-primary-button>
    </div>
</form>
</x-guest-layout>